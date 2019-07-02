@extends('layouts.master')
@section('title')
Update Sub-category
@endsection
@section('content')
<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form method="post" action="{{url('subcategories/edit/'.$subcategory->id)}}" enctype="multipart/form-data">
							@csrf
							<div class="">
								<input type="text" name="name" placeholder="Sub-Category Name" required="" value="{{$subcategory->name}}">
							</div>
							<div class="form-group drop-custum">
                    <select class="form-control show-tick" name="category" required="" value="{{$subcategory->categoryName}}" >
                                  <option value="">-- Select Category --</option>
                                    @foreach($categories as $category)    
                                 <option value="{{$category->id}}">{{$category->name}}</option>
                                 @endforeach
                                    </select>
                                </div>
							
							
							
							<div class="">
								@if($subcategory->picture)
                                        <img src="{{url($subcategory->picture)}}">
                                        @endif
							</div>
							<input type="submit" value="Submit">
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