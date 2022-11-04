@extends('layout.main')
@section('title')
Trashed Products
@endsection
@section('body')
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has($msg))
        <div class="alert alert-{{$msg}}" role="alert">
            {{Session::get($msg)}}
        </div>
    @endif
@endforeach
<div class="container my-3">
    <div class="my-3">
        <table id="table_id" class="table-light table table-striped table-bordered w-100">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Desc</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->prod_name}}</td>
                        <td>{{$product->prod_cat}}</td>
                        <td>{{$product->prod_desc}}</td>
                        <td>{{$product->prod_price}}</td>
                        <td>
                            <a href="/products/restore/{{$product->id}}" class="btn btn-info" >Restore</a>
                            <a href="/products/delete/{{$product->id}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete {{$product->prod_name}} ?')">Delete</a>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection