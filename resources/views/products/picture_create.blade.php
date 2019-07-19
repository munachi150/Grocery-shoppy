@extends('layouts.master')

@section('pagecss')
<link rel="stylesheet" type="text/css" href="{{url('dropzone/dropzone.css')}}">
@endsection

@section('content')
@include('flash::message')
<div class="container mt-15">
<div class="row clearfix" id="pics">
	@foreach($product->pictures as $picture)
        <div class="col-md-4">
        	<h5>
        		<img src="{{url($picture->picture)}}" style="max-width: 100%; height: auto;">
        		<a href="{{url('products/pictures/delete/'.$picture->id)}}" class="btn  btn-danger btn-xs">Delete</a>
        	</h5>
            </div>
            @endforeach
        </div>
      <form method="post" action="{{url('products/pictures/'.$product->url)}}" enctype="multipart/form-data" class="dropzone" id="productPics">
      	@csrf
      </form>

      <div align="center" style="margin-top: 10px; margin-bottom: 20px;"><a href="{{url('product/'.$product->url)}}" class="btn btn-primary btn-lg">View products details </a></div>
    </div>

@endsection

@section('pagejs')
<script src="{{url('dropzone/dropzone.js')}}"></script>
<script src="{{url('dropzone/dropzone-config.js')}}"></script>
@stop
