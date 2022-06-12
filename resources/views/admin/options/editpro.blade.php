@extends('admin.index')

@section('admin-pages') 

 <h1 class="text-center bg-light my-5">Edit Informations</h1>
 
 
 
 			@foreach($editpro as $editpro)
		    <form action="{{ url('admin/uppro/'.$editpro->id) }}"  method="post" enctype="multipart/form-data" >
			@csrf

				
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Product Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name" value="{{ $editpro->pro_name }}" /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Product ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="username" placeholder="Enter ID" value="{{ $editpro->id }}" readonly /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Category</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <select name="cat_id" class="form-control form-group" id="">
                     	<option hidden value="">Select a Category</option>

					 @foreach($cat as $cat)
                      <option @if($editpro->cat_id == $cat->id) selected @endif 
                      	value="{{ $cat->id }}"> {{ $cat->cat_name }}</option>		
					 @endforeach

					 </select>					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Brand</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <select name="brand_id" class="form-control form-group" id="">
                     	<option hidden value="">Select a Brand</option>
					     
					     @foreach($brand as $brand)
                      <option @if($editpro->brand_id == $brand->id) selected @endif 
                       value="{{ $brand->id }}"> {{ $brand->brand_name }}</option>		
		     
					 @endforeach
					 
					 
					 </select>				
					</div>
					
		    	</div>
				
				
				
					<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Descrip -tion</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <textarea name="description" id="" cols="50" rows="3"
                     value=""> {{ $editpro->description }}</textarea>			
					</div>
					
		    	</div>
				
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Price</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group " type="text" name="price" id="username"  value="{{ $editpro->price }}"  /> 
					
					</div>
					
		    	</div>


				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Image</strong></label></div>
					
		    		<div class="col-sm-7"> @php $count=0; @endphp
		    		@foreach($images as $image) @if($editpro->id == $image->product_id)
		    		@php $count++; @endphp
			 <img style="width:60px;height:60px" src="{{ asset('../../../'.$image->image_name) }}" alt="" />
			@endif @endforeach
            Change: <input type="file" name="images[]" multiple /> {{"Select maximum ".$count." Images"}}

                   @error('image') <b class="text-danger font-italic"> {{$message }}</b> @enderror					
					</div>
					
		    	</div>
				
				
				
				
				<input type="submit" name="editpro" value="Update" class=" mt-4 w-100   mx-auto px-3 py-2 btn btn-primary  " />
				
		    </form>
		    @endforeach

		    @endsection