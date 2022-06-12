
@extends('admin.index')

@section('admin-pages') 

<h3  class="my-4  h3 bg-primary font-weight-bold">Add Products  </h3>
<div class="text-center bg-success mb-5"><b class="bg-success  " > {{ Session:: get('success') }}
</b>
</div>


			

			
		    <form action="{{ route('saveproduct') }}"  method="post" enctype="multipart/form-data" >
			@csrf
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Product Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					
					</div>
					<div class="col-sm-4">New Product <input name="new" type="checkbox" value="0"/></div>
					@error('name') <b class="text-danger font-italic"> {{$message }}</b> @enderror
		    	</div>


				
				
				
			
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Category</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <select name="cat_id" class="form-control form-group" id="">
                     	<option hidden value="">Select a Category</option>

					 @foreach($cat as $cat)
                      <option value="{{ $cat->id }}"> {{ $cat->cat_name }}</option>		
		     
					 @endforeach
					 
					 </select>					
					</div>
					
					@error('cat_id') <b class="text-danger font-italic"> {{$message }}</b> @enderror
		    	</div>
				
				
				
					<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Brand</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <select name="brand_id" class="form-control form-group" id="">
                     	<option hidden value="">Select a Brand</option>
					     
					     @foreach($brand as $brand)
                      <option value="{{ $brand->id }}"> {{ $brand->brand_name }}</option>		
		     
					 @endforeach
					 
					 
					 </select>					
					</div>
					@error('brand_id') <b class="text-danger font-italic"> {{$message }}</b> @enderror
		    	</div>
				
				
				
					<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Descrip -tion</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <textarea name="description" id="" cols="50" rows="3"></textarea>			
					</div>
					
					@error('description') <b class="text-danger font-italic"> {{$message }}</b> @enderror
		    	</div>
				
				
				
				
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Price</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group " type="text" name="price" id="username" placeholder="$USD"  /> 
					
					</div>
					
					@error('price') <b class="text-danger font-italic"> {{$message }}</b> @enderror
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Image</strong></label></div>
					
		    		<div class="col-sm-7"> 
                   <input type="file" name="image[]" multiple />					
					</div>
					
					@error('image') <b class="text-danger font-italic"> {{$message }}</b> @enderror
		    	</div>
				
				
				
				
				<input type="submit" name="addpro" value="Add a Product" class=" w-25 m-auto px-3 py-2 btn btn-dark  font-italic" />
				
		    </form>
			
			
			
							<div class="clearfix" style="min-height:140px"></div>

							@endsection
