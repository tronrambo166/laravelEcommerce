
@extends('admin.index')

@section('admin-pages') 

 <h3  class="my-4  h3 bg-primary font-weight-bold">Add Categories  </h3>
<div class="text-center bg-success mb-5"><b class="bg-success  " > {{ Session:: get('success') }}
</b>
</div>


			

			
		    <form action="{{ route('savecat') }}"  method="post" enctype="multipart/form-data" >
		    	@csrf
			
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Category Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					
					</div>

					@error('name')
					<b class="text-danger font-italic"> {{$message }}</b> @enderror

					
		    	</div>
				
				
				
				
				
				
				
				
				<input type="submit" name="savecat" value="Save" class="px-3 py-2 btn btn-secondary  font-italic" />
				
		    </form>
			
			
			
							<div class="clearfix" style="min-height:140px"></div>

@endsection