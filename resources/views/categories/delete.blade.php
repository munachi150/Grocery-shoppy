@extends('layouts.master')
@section('title')
Delete category
@endsection
@section('content')
<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form method="post" action="{{url('categories/delete/'.$category->id)}}" >
							@csrf
							<div class="">
								<p>{{$category->name}}</p>
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