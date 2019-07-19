@extends('layouts.master')
@section('title')
Show products
@endsection
@section('banner')
<div class="page-head_agile_info_w3l">

	</div>
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{url('/')}}">Home</a>
						<i>|</i>
					</li>
					@auth
					@if(auth()->user()->isAdmin())
					<li>{{$product->name}}</li>
					<ul style="display: flex; justify-content: flex-end; align-items: center;">
					<li style="margin-right: 20px; "><a href="{{url('products/edit/'.$product->id)}}" class="btn btn-primary">Edit</a></li>
					<li><a href="{{url('products/delete/'.$product->id)}}" class="btn btn-danger">Delete</a></li>
					@endif
					@endauth
				</ul>
				</ul>
			</div>
		</div>
	</div>
@endsection
@section('content')
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			@include('flash::message')
			<h3 class="tittle-w3l">Single Page
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							@foreach($product->pictures as $picture)
							<li data-thumb="{{url($picture->picture)}}">
								<div class="thumb-image">
									<img src="{{url($picture->picture)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							@endforeach
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3>{{$product->name}}</h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<p>
					<span class="item_price">&#8358; 
						{{number_format($product->price/100, 2)}}</span>
					<del>&#8358; 
						{{number_format($product->price/100, 2)}}</del>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Shipping Speed to Delivery.
						</li>
						<li>
							Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
						</li>
						<li>
							1 offer from
							<span class="item_price">&#8358; 
								{{number_format($product->price/100, 2)}}</span>
						</li>
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
						<label>{{$product->name}}</label> product.</p>
					<ul>
						<li>
							{{$product->description}}
						</li>
						
					</ul>
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>All food products are
						<label>non-returnable.</label>
					</p>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="#" method="post">
							<fieldset>
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="business" value=" " />
								<input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
								<input type="hidden" name="amount" value="950.00" />
								<input type="hidden" name="discount_amount" value="1.00" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="return" value=" " />
								<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<input type="text" name="quantity" value="1" min="1" max="100" id="qty" style="width: 
												40%; height: 80%;" />
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>&nbsp;
									</div>
								<a href="javascript:addcart_with_qty({{$product->id}})" class="btn btn-primary">Add to cart</a>
								<div id="cart_feedback"></div>
							</fieldset>
						</form>
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Single Page -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Add More
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
                   @foreach($other_products as $product)
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.html">
									<img src="{{url($product->picture)}}" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.html">{{$product->name}}</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>&#8358;{{number_format($product->price)}}</h6>
									<p>&#8358;{{number_format($product->old_price)}}</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Aashirvaad, 5g" />
											<input type="hidden" name="amount" value="220.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<a href="javascript:add_cart({{$product->id}})" class="btn btn-primary">Add to cart<a/>
										</fieldset>
									</form>
								</div>
								<div id="cartfeedback">	</div>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
<script> 
  function addcart_with_qty(product_id){
  	console.log(product_id);
  let feedback =  document.getElementById('cart_feedback');
  let qty_val = document.getElementById('qty').value;
  feedback.innerHTML = `<div class="alert alert-info" role="alert"><buttontype="button"class="close" data-dismiss="alert" aria-hidden="true">&times; </button>Processing ..</div>`;
  		$('#cart_feedback').load(base+'/product/cart/'+product_id+'/'+qty_val);
  		cart_count();
}
function add_cart(product_id){

console.log(product_id);
let feedback = document.getElementById('cartfeedback');
feedback.innerHTML = `<div class="alert alert-info" role="alert"><buttontype="button"class="close" data-dismiss="alert" aria-hidden="true">&times; </button>Processing ..</div>`;
$('#cartfeedback').load(base+'/product/cart_special_deal/'+product_id);
cart_count();

}
</script>
@endsection