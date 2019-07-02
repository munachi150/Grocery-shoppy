@extends('layouts.master')
@section('title')
Delete groceries
@endsection
@section('content')
<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form method="post" action="{{url('products/delete/'.$product->id)}}" enctype="multipart/form-data">
							@csrf
							<div class="">
								<p>{{$product->name}}</p>
							</div>
							<div class="">
								<p>{{$product->price}}</p>
							</div>
							<div class="">
								<p>{{$product->category_id}}</p>
							</div>
							<div class="">
								<p>{{$product->sub_category_id}}</p>
							</div>
								<div class="">
								<p>{{$product->old_price}}</p>
							</div>
							
							<div class="">
								<p>{{$product->description}}</p>
							</div>
							<div class="">
								@if($product->picture)
								<img src="{{url($product->picture)}}">
								@endif
							</div>
							<input type="submit" value="Delete">
						</form>
					</div>
					<div class="contact-right wthree">
						
						<div class="col-xs-5 contact-agile">
							<img src="images/contact2.jpg" alt="">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
@endsection

