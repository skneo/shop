@extends('layout.main')
@section('title')
All Products
@endsection
@section('body')
<div class="container my-3">
    <a id='about' class='btn btn-primary btn-sm' aria-current='page' href='/add_product'>Add Product</a>
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
                            <a href="/products/edit/{{$product->id}}" class="btn btn-info" >Edit</a>
                            <a href="/products/trash/{{$product->id}}" class="btn btn-danger" onclick="return confirm('Are you sure to trash {{$product->prod_name}} ?')">Trash</a>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection