<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Image;
use App\Models\Product;
use App\Models\Service;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newArrivals = $this->product->active()->onHome()->onNew()->hasImages()->with('colors','sizes','images','user')->orderBy('created_at', 'desc')->take(self::TAKE)->get();
        $onSaleProducts = $this->product->active()->onSaleOnHome()->hasImages()->orderby('end_sale','desc')->take(self::TAKE)->get();
        $bestSalesProducts = $this->product->whereIn('id', $this->product->active()->hasImages()->bestSalesProducts())->get();
        $hotDeals = $this->product->active()->onSale()->hotDeals()->hasImages()->orderby('end_sale','desc')->take(self::TAKE)->get();
        $categoriesHome = Category::onHome()->take(self::TAKE)->orderBy('order')->with('children.children')->get();
        $categoriesFeatured = Category::where(['is_featured' => true])->take(self::TAKE)->orderBy('order')->get();
        $brands = Brand::active()->onHome()->take(12)->get();
        return view('frontend.wokiee.four.home', compact(
            'newArrivals',
            'onSaleProducts',
            'bestSalesProducts',
            'hotDeals',
            'categoriesHome',
            'categoriesFeatured',
            'brands'
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
