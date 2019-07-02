
@extends('layouts.master')

@section('title')
All Categories
@endsection

@section('content')

<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			
			<!-- //product left -->
			<!-- product right -->
			
					<!-- first section (nuts) -->
					<div class="product-sec1">
						
						<h3 class="heading-tittle">All Categories</h3>
                         @foreach($categories as $category)
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								
								<div class="item-info-product ">
									<h4>
										<a href="{{url('category/'.$category->url)}}">{{$category->name}} </a>
									</h4>
									
									<span><a href="{{url('categories/edit/'.$category->id)}}" class="btn btn-default btn-sm">Edit</a>&nbsp<a href="{{url('categories/delete/'.$category->id)}}" class="btn btn-primary btn-sm">Delete</a></span>
									
									

								</div>
							</div>
						</div>
						@endforeach
						
						<div class="clearfix"></div>
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	
@endsection