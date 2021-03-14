<?php

namespace App\Http\Controllers;

use App\Category;
use App\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $categories = Category::where('status',1)->get();
        $sliders = Slider::where('status',1)->get();
        return view('front.home.home',compact('sliders','categories'));
    }
    public function categoryProduct(){
        return view('front.category.category-product');
    }
    public function productDetail(){
        return view('front.product.product-detail');
    }
    public function contact(){
        return view('front.contact.contact');
    }
}
