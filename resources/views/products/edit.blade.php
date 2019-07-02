@extends('layouts.master')
@section('title')
Edit groceries
@endsection
@section('content')
<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form method="post" action="{{url('products/edit/'.$product->id)}}" enctype="multipart/form-data">
							@csrf
							<div class="">
								<input type="text" name="name" placeholder="Item Name" required="" value="{{$product->name}}">
							</div>
							<div class="">
								<input class="text" type="text" name="price" placeholder="Price" required="" value="{{$product->price}}">
							</div>
							<div class="">
								<textarea class="field span8" id="textarea" name="description" 
                                 rows="10"placeholder="description"  value="">{{$product->description}}</textarea>	
                                 </div>
                                 <div class="">
                                 	<select class="form-control" name="sub_category">                                
                                 	<option value="">--Select Subcategory--</option>
                                 @foreach($subcategories as $subcategory)
						          <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
						          @endforeach
                                 </select>
                                 </div>
							
							<div class="">
								@if($product->picture)
								<img src="{{url($product->picture)}}">
								@endif
								<input type="submit" value="Update">
							</div>
							</form>
					        </div></div></div>
					       
					<div class="contact-right wthree">
						
						<div class="col-xs-5 contact-agile">
							<img src="images/contact2.jpg" alt="">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
@endsection

