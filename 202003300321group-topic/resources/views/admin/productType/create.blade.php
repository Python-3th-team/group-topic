@extends('layouts/app')


@section('content')

<div class="container">
    <h1>新增產品類別</h1>
<form method="POST" action="/home/productType/store" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="img">主要圖片上傳</label>
        <input type="file" class="form-control" id="img" name="img" required>
    </div>
    <div class="form-group">
        <label for="types1">中文品項</label>
        <input type="text" class="form-control" id="types1"  name="types1">
      </div>

      <div class="form-group">
        <label for="types2">英文品項</label>
        <input type="text" class="form-control" id="types2"  name="types2">
      </div>
    <div class="form-group">
      <label for="content">內容</label>

      <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection

