@extends('layouts.master')
@section('title')
Create Sub-categories
@endsection
@section('content')
<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form method="post" action="{{url('subcategories/create')}}" enctype="multipart/form-data">
							@csrf
							<div class="">
								<input type="text" name="name" placeholder="Sub-Category Name" required="">
							</div>
							<div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="category" required="">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
							
							
							
							<div class="">
								<input type="file" name="picture">
							</div>
							<input type="submit" value="Submit">
						</form>
					</div>
					
				</div>

			</div>
@endsection

