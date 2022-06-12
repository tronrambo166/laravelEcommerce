@extends('internal.layout')

@section('page')
		
		<!-- Menu -->
		
		
		
		
		<!-- Body -->
		
		<div class="container">
		
	
    		<div class="heading"> 
    		<h5 class="mb-5 text-secondary bg-light text-center">Preview Product </h5>
    		</div>

    		<h3 class="text-center font-weight-bold bg-light"><b class="h5 text-success" > {{ Session:: get('success') }}</b> </h3>
    		<div class="clear"></div>
    	
	     

        <div class="">
        	<h3 class="text-dark font-weight-bold ">{{$single_pro->pro_name}}</h3>
		
		 <div  class="section group ">
				
            <div class="cont-desc span_1_of_2">				
					<div class="grid images_3_of_2 ">
						<img style="width:220px;height:150px" 
				src="{{asset('../../'.$single_pro->image_name)}}" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2 class="text-dark font-weight-bold mb-3"> </h2>
					<div class="">
						<p class="">Price: <span class="bg-dark px-4 py-2 text-light font-weight-bold rounded">{{$single_pro->price}} .00</span></p>

						<p>Category: <span class="font-weight-bold">{{$single_pro->cat_name}}</span></p>
				        <p>Brand:<span class="font-weight-bold"> {{$single_pro->brand_name}}</span></p>
					</div>
				<div class="add-cart">
				
					<form class="d-inline-block" action="{{url('add-cart/'.$single_pro->id)}}" method="post"> @csrf
						Quantity: <input type="number" max="10" min="0" class="buyfield" name="quantity" value="1"/>
						
						<input type="submit" class="btn btn-info my-2 d-inline" name="add_cart" value="Add To Cart"/> </form>
						
			@guest
			<a type="button" href="" onclick="savelist();" class="buysubmit my-2 btn btn-warning d-inline" name="savelist" value="">Add To Savelist</a>@else 

					<form class="d-inline-block" action="{{url('add-list/'.$single_pro->id)}}" method="post"> @csrf
						
						<input type="submit" class="btn btn-warning my-2 d-inline" name="add_cart" value="Add To Savelist"/>  @endguest
				
					</form>	
					
				</div>
			</div>

			
				
	</div>				
				
			</div>
		
		
		
		
		
		</div>		

		<div class="my-5 w-100">
			<h2 class="bg-info text-center ">Product Details</h2>
               <p class="text-center"> {{$single_pro->description}} </p>
			</div>

		
		
		
		
		
		<!-- Body -->
		
		
	</div> 
	@endsection
	<div class="clearfix"></div>
	
	
	
	