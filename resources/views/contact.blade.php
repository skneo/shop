@extends('layout.main')
@section('title')
     Contact
@endsection
@section('body')
    <div class="container my-3">
        I want to meet {{$name}} {{$empName ?? '1111'}}
    </div>
@endsection
