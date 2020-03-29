<?php

namespace App\Http\Controllers;

use App\ProductTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductTypeController extends Controller
{
    public function index(){
        $all_types = ProductTypes::all();
        return view('admin/productType/index' , compact('all_types'));
    }
    public function create(){
        return view('admin/productType/create');
    }
    public function store(Request $request){
        $types = $request->all();

    // 暴力上傳
    if($request->hasFile('img')) {
    $file = $request->file('img');
    $path = $this->fileUpload($file,'productTypes');
    $types['img'] = $path;
}
        $product_types = ProductTypes::create($types);
        $product_types->save();

        return redirect('home/productType');
    }

    public function edit($id){

        $items = ProductTypes::find($id);


        return view('admin/productType/edit' , compact('items'));
    }
    public function update(Request $request,$id ){

        $request_data = $request->all();
        $items = ProductTypes::find($id);

    if($request->hasFile('img')){
        // 刪除舊圖片
        $old_image = $items->img;
        File::delete(public_path().$old_image);

        // 上傳新圖片
        $file = $request->file('img');
        $path = $this->fileUpload($file,'productType');
        $request_data['img'] = $path;
    }
    $items -> update($request_data);


    return redirect('home/productType');
}
public function delete(Request $request,$id){
    $item = ProductTypes::find($id);
    $old_image = $item->img;
     if(file_exists(public_path().$old_image))

     {
         File::delete(public_path().$old_image);
     }
     $item->delete();
    return redirect('home/productType');
}


    private function fileUpload($file,$dir){
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/'.$dir)) {
            mkdir('upload/'.$dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/'.$dir.'/'.$filename;
    }
}
