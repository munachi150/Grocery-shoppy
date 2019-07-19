<div class="checkout-right">
				<h4>Your shopping cart contains:
					<span>3 Products</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>
								<th>Price</th>

								<th>Remove</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							@foreach($carts as $cart)
							<tr class="rem1">
								
								<td class="invert-image">
									<a href="single2.html">
										<img src="{{$cart->model->picture}}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>{{$cart->qty}}</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">{{$cart->name}}</td>
								<td class="invert">&#8358;{{number_format($cart->price)}}</td>
								<td class="invert">
									<div class="rem">
							<button type="button" class="btn btn-danger btn-xs" onclick="remove_cart_item('{{$cart->rowId}}')">x</button>
									</div>
								</td>
								<td class="invert">
								 &#8358;{{number_format($cart->price * $cart->qty,2)}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>