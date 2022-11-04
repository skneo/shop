@extends('layout.main')
@section('title')
Add Product
@endsection
@section('body')
<div class="container my-3">
    <h3>{{$page_heading}}</h3>
    <form method='POST' action='{{$submit_url}}'>
        @csrf
        <div class='mb-3'>
            <label for='prod_name' class='form-label float-start'>Product Name</label>
            <input type='text' class='form-control' id='prod_name' name='prod_name' @if($prod_edit) value="{{$product->prod_name}}" @else value="{{old('prod_name')}}" @endif>
            <small class='form-text text-danger'>
                @error('prod_name')
                    Enter Product Name
                @enderror 
            </small>
        </div>
        <div class='mb-3'>
            <label for='prod_cat' class='form-label float-start'>Product Category</label>
            <input type='text' class='form-control' id='prod_cat' name='prod_cat' @if($prod_edit) value="{{$product->prod_cat}}" @else value="{{old('prod_cat')}}" @endif>
            <small class='form-text text-danger'>@error('prod_cat'){{$message}}@enderror</small>
        </div>
        <div class='mb-3'>
            <label for='prod_desc' class='form-label float-start'>Product Desc</label>
            <input type='text' class='form-control' id='prod_desc' name='prod_desc' @if($prod_edit) value="{{$product->prod_desc}}" @else value="{{old('prod_desc')}}" @endif>
            <small class='form-text text-danger'>@error('prod_desc'){{$message}}@enderror</small>
        </div>
        <div class='mb-3'>
            <label for='prod_price' class='form-label float-start'>Product Price</label>
            <input type='text' class='form-control' id='prod_price' name='prod_price' @if($prod_edit) value="{{$product->prod_price}}" @else value="{{old('prod_price')}}" @endif>
            <small class='form-text text-danger'>@error('prod_price'){{$message}}@enderror</small>
        </div>
        <div class='mb-3'>
            <label for='prod_image' class='form-label float-start'>Product Image</label>
            <input type='text' class='form-control' id='prod_image' name='prod_image' @if($prod_edit) value="{{$product->prod_image}}" @else value="{{old('prod_image')}}" @endif>
            <small class='form-text text-danger'>@error('prod_image') Upload product image @enderror</small>
        </div>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
</div>
@endsection