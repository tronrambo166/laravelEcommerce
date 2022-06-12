@extends('layout')

@section('page')
		
		<!-- Menu -->
		
		
		
		
		<!-- Body -->
		
		<div class="container">
		
		
		
    		
			<div class="cartpage">    
	<h2 class="w-100 "> Saved Products <small class="ml-5 text-success bg-light"></small>
	          </h2> 
			<h3 class="text-center font-weight-bold bg-light"><b class="h5 text-success" > {{ Session:: get('success') }}</b> </h3>

						<table class="tblone">
							<tr class="text-center">
								<th width="10%">SL No.</th>
								<th width="20%">Product Name</th>
								<th width="20%">Image</th>
								
								<th width="10%">Price</th>
								
								<th class="text-center" width="30%">Action</th>
							</tr>
							
								@php $c=0; $match=0; @endphp
								@foreach($savelist as $product) 
                        <tr class="text-center">
                        	<td>{{ $c++; }}</td>
                            <td>{{ $product->pro_name }}</td>

                            @foreach($images as $image)
                            @if($product->product_id == $image->product_id)
                            <td><img width="110px" height="70px" src="{{ asset('../'.$image->image_name) }}" alt=""/></td> @break  @endif @endforeach 

                            <td>${{$product->price }}</td>
                            <td >



                                <form action="{{url('add-cart/'.$product->id)}}" method="post"> @csrf
						Q: <input type="number" max="10" min="0" class="d-inline-block buyfield" name="quantity" value="1"/>
						
				@foreach($carts as $cart) @if($product->product_id == $cart->product_id)					
				<a href="" class="disabled btn btn-info text-dark font-weight-bold">Added to cart</a> @php $match=1; @endphp @break @else @php $match=0; @endphp  @endif @endforeach 

				 @if($match==0)
				 <input type="submit" class="btn btn-info text-dark font-weight-bold" name="add_cart" value="Add To Cart"/> @endif

				 <a onclick="return confirm('Remove from savelist ?');"
				 href="{{url('delete_list/'.$product->id)}}"><b class="text-danger ml-2 btn btn-dark">X</b></a> </form>  </td> 

				
				
				
						
						</tr>@endforeach
							
						</table>
						
		@if($c==0) <h4 class="my-5 bg-light text-center text-danger">List is Empty!</h4>@endif
						
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="{{route('home')}}"> <img src="images/shop.png" alt="" /></a>
						</div>
						
						
					</div>
    	</div>  	
       
   
		@endsection
		<div class="clear"></div>
		
		<!-- Body -->



	
	
	
	