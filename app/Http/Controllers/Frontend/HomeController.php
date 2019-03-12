<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Commercial;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Image;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slide;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $product;
    public $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $product, Service $service)
    {
        $this->product = $product;
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slide::active()->onHome()->take(6)->get();
        $newServices = $this->service->serveCountries()->active()->available()->onHome()->onNew()->hasImage()->hasTiming()->with('user.country')->orderby('created_at', 'desc')->take(self::TAKE)->get();
        $onSaleServices = $this->service->serveCountries()->active()->available()->onSaleOnHome()->hasTiming()->with('user.country')->orderby('created_at', 'desc')->take(self::TAKE)->get();
        $serviceHotDeals = $this->service->active()->available()->onSale()->onHome()->hotDeals()->hasImage()->serveCountries()->hasTiming()->with('user.country')->orderby('end_sale', 'desc')->take(self::TAKE)->get();

        if (request()->has('mallr')) {
            $newProducts = $this->product->active()->available()->onHome()->onNew()->hasImage()->serveCountries()->hasStock()->with('images', 'product_attributes.color', 'user.country')->orderBy('created_at', 'desc')->take(self::TAKE)->get();
            $onSaleProducts = $this->product->active()->available()->onSaleOnHome()->hasImage()->serveCountries()->with('images', 'product_attributes.color', 'user.country')->orderby('end_sale', 'desc')->take(self::TAKE)->get();
            $bestSalesProducts = $this->product->whereIn('id', $this->product->active()->available()->hasImage()->serveCountries()->bestSalesProducts())->with('images', 'product_attributes.color', 'user.country')->get();
            $productHotDeals = $this->product->active()->available()->onSale()->hotDeals()->hasImage()->serveCountries()->with('images', 'product_attributes.color', 'user.country')->orderby('end_sale', 'desc')->take(self::TAKE)->get();
            $categoriesHome = Category::onHome()->isFeatured()->orderBy('order', 'desc')->take(4)->get();
//            $categoriesFeatured = Category::where(['is_featured' => true])->take(self::TAKE)->orderBy('order', 'desc')->get();
            $brands = Brand::active()->onHome()->orderBy('order', 'desc')->take(12)->get();
        }
        $topDoubleCommercials = Commercial::active()->double()->orderBy('order', 'desc')->take(2)->get();
        $bottomDoubleCommercials = Commercial::active()->double()->orderBy('order', 'desc')->take(2)->get();
        return view('frontend.wokiee.four.home', compact(
            'sliders',
            'newServices',
            'onSaleServices',
            'newProducts',
            'onSaleProducts',
            'bestSalesProducts',
            'productHotDeals',
            'serviceHotDeals',
            'categoriesHome',
            'categoriesFeatured',
            'brands',
            'topDoubleCommercials',
            'bottomDoubleCommercials',
            'tripleCommercials'
        ));
    }


    public function search(Filters $filters)
    {
        $validator = validator(request()->all(), ['search' => 'nullable']);
        if ($validator->fails()) {
            return redirect()->route('frontend.home')->withErrors($validator->messages());
        }
        $products = $this->product->active()->available()->hasAttributes()->hasImage()->filters($filters)->with(
            'brands', 'product_attributes.color', 'product_attributes.size', 'tags',
            'favorites', 'categories.children')
            ->orderBy('id', 'desc')->paginate(20);

        $services = $this->product->active()->available()->hasImage()->filters($filters)->with(
            'tags', 'favorites', 'categories.children')
            ->orderBy('id', 'desc')->paginate(20);

        $tags = $products->pluck('tags')->flatten()->unique('id')->sortKeysDesc();
        $sizes = $products->pluck('product_attributes')->flatten()->pluck('size')->flatten()->unique('id')->sortKeysDesc();
        $colors = $products->pluck('product_attributes')->flatten()->pluck('color')->flatten()->unique('id')->sortKeysDesc();
        $brands = $products->pluck('brands')->flatten()->flatten()->unique('id')->sortKeysDesc();
        $categoriesList = $products->pluck('categories')->flatten()->unique('id');
        if (!$products->isEmpty()) {
            $currentCategory = request()->has('category_id') ? Category::whereId(request('category_id'))->first() : null;
            return view('frontend.modules.product.index', compact('products', 'services', 'tags', 'colors', 'sizes', 'categoriesList', 'brands', 'currentCategory'));
        } else {
            return redirect()->route('frontend.home')->with('error', trans('message.no_items_found'));
        }
    }


    public function changeCurrency()
    {
        $currency = Currency::where('currency_symbol_en', strtoupper(request('currency')))->first();
        session()->put('currency', $currency);
        return redirect()->back();
    }

    public function changeLanguage()
    {
        app()->setLocale(request('locale'));
        session()->put('locale', request('locale'));
        return redirect()->back();
    }

    public function getAboutus(Aboutus $aboutUs)
    {
        $aboutData = $aboutUs->where('id', 1)->first();

        return view('frontend.pages.about', compact('aboutData'));
    }

    public function getContact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Post Contact Form
     * @param Request $request
     */
    public function postContact(Request $request)
    {
        $email = Contactus::first()->email;

        try {

            Mail::to($email)->cc($request->email)->queue(new SendContactus($request->request->all()));

        } catch (\Exception $e) {

            return redirect()->back()->with('info', $e->getMessage());
        }

        return redirect('home')->with('success', trans('general.mail_sent'));
    }


    public function getFaq()
    {
        $faqs = $this->pagesQuestions->getFaqs();

        return view('frontend.pages.faq', compact('faqs'));
    }

    public function getPrivacy(Privacy $privacy)
    {
        $privacyData = $privacy->where('id', 1)->first();

        return view('frontend.pages.privacy', compact('privacyData'));
    }

    public function getPolicy()
    {
        $QAs = $this->pagesQuestions->getReturnPolicy();

        return view('frontend.pages.policy', compact('QAs'));
    }

    public function getTerms(Terms $terms)
    {
        $termsData = $terms->where('id', 1)->first();

        return view('frontend.pages.terms', compact('termsData'));
    }

    public function setCountry(Request $request)
    {
        $validator = validator($request->all(),
            [
                'country_id' => 'required|exists:countries,id'
            ]);
        if ($validator->fails()) {
            session()->forget('country');
            return redirect()->back()->withErrors($validator);
        }
        $country = Country::whereId($request->country_id)->first();
        if ($country) {
            session()->put('country', $country);
            // later we shall fire an event to check Cart
            $cart = Cart::content();
            $cart->each(function ($item, $rowId) {
                if ($item->options->type === 'product') {
                    $product = Product::whereId($item->options->element_id)->with('shipment_package.countries')->first();
                    if (!checkShipmentAvailability(getClientCountry()->id, $product->shipment_package->countries->pluck('id')->toArray())) {
                        Cart::remove($rowId);
                    }
                }
            });
            return redirect()->back()->with('success', trans('general.country_successfully_set'));
        }
        return redirect()->back()->with('error', trans('general.country_is_not_set_successfully'));

    }

}
