@extends('layouts/app')


@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')

<div class="container">
    <a href="/home/productType/create" class="btn btn-success">新增產品類型</a>
    <hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>圖片</th>
            <th>中文品項</th>
            <th>英文品項</th>
            <th>內容</th>
            <th width="90"></th>

        </tr>
    </thead>

    <tbody>
        @foreach ($all_types as $item)
        <tr>
            <td>
                <img width="120" src="{{asset($item->img)}}" alt="">
            </td>
            <td>{{$item->types1}}</td>
            <td>{{$item->types2}}</td>
            <td>{{$item->content}}</td>
            <td>
                <a href="/home/productType/edit/{{$item->id}}" class="btn btn-success btn-sm">修改</a>
                <button class="btn btn-danger btn-sm" onclick="show_confirm({{$item->id}})">刪除</button>
                <form id="delete-form-{{$item->id}}" action="/home/productType/delete/{{$item->id}}" method="POST" style="display: none;">
                    @csrf
                </form>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable({
        "order":[[1 ,'desc']]
    });
} );

function show_confirm(id)
{

var r=confirm("確定刪除嗎?!");
if (r==true)
  {
    document.getElementById('delete-form-'+id).submit();
  }

}
</script>
@endsection
