@extends('fe.master')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('fe/img/breadcrumbs.png');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Products</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Products</li>
            </ol>
        </div>
    </div>
@endsection
@section('product')
    @include('fe.product')
@endsection
@section('client')
    @include('fe.client')
@endsection