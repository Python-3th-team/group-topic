<?php

namespace App\Http\Controllers;

use App\News;
use App\CyProduct;
use App\ScProduct;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front/index');
    }

    public function sc_shop()
    {
        return view('front/sc_shop/sc_shop');
    }
    public function cy_plant()
    {
        return view('front/cy_plant/cy_plant');
    }
    public function shop_store()
    {
        return view('front/shop_store');
    }
    public function cy_store()
    {
        $products = CyProduct::all()->sortByDesc('sort');
        return view('front/cy_plant/cy_store' , compact('products'));
    }
    public function sc_store()
    {
        $products = ScProduct::all()->sortByDesc('sort');

        return view('front/sc_shop/sc_store' , compact('products'));
    }

    public function cy_store_item()
    {
        return view('front/cy_plant/cy_store_item');
    }

    // public function sc_shop(){
    //     $news_data = News::all();
    //     return view('admin/news/sc_shop' , compact('news_data'));
    // }
    // public function sc_shop_detail($id){

    //     $news = News::find($id);

    // return view('admin/news/sc_shop_detail' , compact('news'));
    // }
}
