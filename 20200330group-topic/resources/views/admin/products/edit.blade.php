@extends('layouts/app')


@section('content')

<div class="container">
    <h1>編輯產品</h1>

<form method="POST" action="/home/products/update/{{$items->id}}" enctype="multipart/form-data">
    @csrf




    <div class="form-group">
        <label for="types1_id">產品類別</label>
        <input type="text" class="form-control" id="types1_id"  name="types1_id" value="{{$items->types1_id}}">
      </div>
    <div class="form-group">
      <label for="title">產品名稱</label>
      <input type="text" class="form-control" id="title"  name="title" value="{{$items->title}}">
    </div>
    <div class="form-group">
        <label for="money">價錢</label>
        <input type="text" class="form-control" id="money"  name="money" value="{{$items->money}}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
