<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Commercial;
use App\Models\Currency;
use App\Models\Image;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slide;

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
        $sliders = Slide::active()->onHome()->get();

        $newServices = $this->service->active()->onHome()->onNew()->hasImages()->hasTiming()->with('user.role')->orderby('created_at', 'desc')->take(self::TAKE)->get();
        $onSaleServices = $this->service->active()->onSaleOnHome()->hasTiming()->with('user.role')->orderby('created_at', 'desc')->take(self::TAKE)->get();
        $serviceHotDeals = $this->service->active()->onSale()->hotDeals()->hasImages()->hasTiming()->with('user.role')->orderby('end_sale', 'desc')->take(self::TAKE)->get();

        $newProducts = $this->product->active()->onHome()->onNew()->hasImages()->with('images', 'user.role')->orderBy('created_at', 'desc')->take(self::TAKE)->get();
        $onSaleProducts = $this->product->active()->onSaleOnHome()->hasImages()->with('user.role')->orderby('end_sale', 'desc')->take(self::TAKE)->get();
        $bestSalesProducts = $this->product->whereIn('id', $this->product->active()->hasImages()->bestSalesProducts())->get();
        $productHotDeals = $this->product->active()->onSale()->hotDeals()->hasImages()->with('user.role')->orderby('end_sale', 'desc')->take(self::TAKE)->get();

        $categoriesHome = Category::onHome()->take(self::TAKE)->orderBy('order', 'desc')->with('children.children')->get();
        $categoriesFeatured = Category::where(['is_featured' => true])->take(self::TAKE)->orderBy('order', 'desc')->get();
        $brands = Brand::active()->onHome()->orderBy('order', 'desc')->take(12)->get();

        $topDoubleCommercials = Commercial::active()->double()->orderBy('order', 'desc')->take(2)->get();
        $bottomDoubleCommercials = Commercial::active()->double()->orderBy('order', 'desc')->take(2)->get();
        $tripleCommercials = Commercial::active()->triple()->orderBy('order', 'desc')->take(3)->get();

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

}
