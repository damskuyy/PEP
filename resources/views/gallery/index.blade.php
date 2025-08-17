@extends('fe.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/img/breadcrumbs.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Gallery</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Gallery</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->
@endsection
@section('gallery')
    @include('fe.gallery')
@endsection
@section('client')
    @include('fe.client')
@endsection