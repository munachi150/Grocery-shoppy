@extends('layouts.master')
@section('title')
Delete Sub-category
@endsection
@section('content')
<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form method="post" action="{{url('subcategories/delete/'.$subcategory->id)}}" enctype="multipart/form-data">
							@csrf
							<div class="">
								<p>{{$subcategory->name}}</p>
							</div>
							<div class="form-group drop-custum">
                    
                                </div>
							
							
							
							<div class="">
								@if($subcategory->picture)
                                        <img src="{{url($subcategory->picture)}}">
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