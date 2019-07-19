@extends('layouts.master')

@section('title')
All Sub-subcategories
@endsection

@section('content')

<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						
						<h3 class="heading-tittle">All Sub-categories</h3>
                         @foreach($subcategories as $subcategory)
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">

									<img src="{{url($subcategory->picture)}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{url('subcategory/'.$subcategory->url)}}" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{url('subcategory/'.$subcategory->url)}}">{{$subcategory->name}} {{$subcategory->categoryName}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{$subcategory->price}}</span>
										<del>{{$subcategory->deletedPrice}}</del>
									</div>
									<span><a href="{{url('subcategories/edit/'.$subcategory->id)}}" class="btn btn-default btn-sm">Edit</a>&nbsp<a href="{{url('subcategories/delete/'.$subcategory->id)}}" class="btn btn-primary btn-sm">Delete</a></span>
									
									</div>
								</div>
								</div>
								@endforeach
								</div>
								
							</div>
						</div>
						
						
						<div class="clearfix"></div>
					
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
			<div class="row clearfix">
            <div class="col-sm-12 text-center">
                <a href="{{url('subcategories/create')}}" class="btn btn-raised g-bg-cyan">Add Sub-Category</a>
            </div>
        </div>
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	
@endsection