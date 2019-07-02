@extends('layouts.master')
@section('title')
Create category
@endsection
@section('content')
<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form method="post" action="{{url('categories/create')}}" enctype="multipart/form-data">
							@csrf
							<div class="">
								<input type="text" name="name" placeholder="Category Name" required="">
							</div>
							
							<div class="">
								<input type="file" name="picture" class="form-control">
							</div>
							
							<input type="submit" value="Submit">
						</form>
					</div>
			
				</div>
				
			</div>
@endsection