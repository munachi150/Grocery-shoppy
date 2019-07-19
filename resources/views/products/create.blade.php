@extends('layouts.master')
@section('title')
Create Product
@endsection
@section('content')

<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form method="post" action="{{url('products/create')}}" enctype="multipart/form-data">
							@csrf
							<div class="">
								<input type="text" name="name" placeholder="Item Name*" required="">
							</div>
							<div class="">
								<input class="text" type="text" name="price" placeholder="Price*" required="">
							</div>
							<div>
								<input class="text" type="text" name="old_price" placeholder="Old price (optional)">
							</div>
							
							<div class="">
								<textarea class="field span8" id="textarea" name="description" 
                                 rows="10"placeholder="description*"></textarea>	
                                 </div>
                                 <div class="">
                                 	<select class="form-control" name="category">
                                 	<option value="">-- Select Category --*</option>
                                 	@foreach($categories as $category)
                                 <option value="{{$category->id}}"> {{$category->name}}  </option>
                                 @endforeach
                                 </select>
                                 </div>
                                 <p>&nbsp;</p>
                                 <div class="">
                                 	<select class="form-control" name="sub_category">
                                 	<option value="">-- Select Subcategory --*</option>
                                 	@foreach($subcategories as $subcategory)
                                 <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                 @endforeach
                                 </select>
                                 </div>
                                 
                                 <p>&nbsp;</p>
                                 <div class="">
                                 	<select class="form-control" name="special_offer">
                                 	<option value="">Special offer</option>
                                 <option value="1">Yes</option>
                                 <option value="2">Add More</option>
                                 <option value="3">Special Deals</option>
                                 <option value="0">No</option>
                                 </select>
                                 </div>
                                 <p>&nbsp;</p>
							<div class="">
								<input type="file" name="picture">
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

