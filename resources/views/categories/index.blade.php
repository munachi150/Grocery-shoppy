
@extends('layouts.master')

@section('title')
All Categories
@endsection

@section('content')

<div class="ads-grid">
		<div class="container">
	<div class="product-sec1">
		
		<h3 class="heading-tittle">All Categories</h3>
         @foreach($categories as $category)
		<div class="col-md-4 product-men">
			<div class="men-thumb-item">
					<img src="{{url($category->picture)}}" alt="">
				<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
			<a href="{{url('category/'.$category->url)}}" class="link-product-add-cart">Quick View</a>
		</div>
		</div>
				</div>
			<div class="item-info-product ">
					<h4>
						<a href="{{url('category/'.$category->url)}}">{{$category->name}} </a>
					</h4>
					
				</div>
			</div>
		</div>
		@endforeach
		<div class="clearfix"></div>
	</div>
	
</div>
	
@endsection