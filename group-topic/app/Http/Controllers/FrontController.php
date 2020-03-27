<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('admin/fornt/index');
    }

    public function sc_shop(){
        $news_data = News::all();
        return view('admin/news/sc_shop' , compact('news_data'));
    }
    public function sc_shop_detail($id){

        $news = News::find($id);

    return view('admin/news/sc_shop_detail' , compact('news'));
    }
}
