@extends('layouts.master')
@section('title')
Edit category
@endsection
@section('content')
<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form method="post" action="{{url('categories/edit/'.$category->id)}}" >
							@csrf
							<div class="">
								<input type="text" name="name" placeholder="Category Name" required="" value="{{$category->name}}">
							</div>
							
							
							
							<input type="submit" value="Update">
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