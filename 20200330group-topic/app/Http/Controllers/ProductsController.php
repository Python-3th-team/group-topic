<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    public function index(){
        $all_types = Products::all();
        return view('admin/products/index' , compact('all_types'));
    }
    public function create(){
        return view('admin/products/create');
    }
    public function store(Request $request){
        $types = $request->all();
        $product_types = Products::create($types);
        $product_types->save();

        return redirect('home/products');
    }

    public function edit($id){

        $items = Products::find($id);
        return view('admin/products/edit' , compact('items'));
    }
    public function update(Request $request,$id ){

        $request_data = $request->all();
        $items = Products::find($id);
        $items -> update($request_data);
        return redirect('home/products');
}
     public function delete(Request $request,$id){
        $item = Products::find($id);
        return redirect('home/products');
}

}
