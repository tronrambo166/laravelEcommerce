@extends('admin.index')

@section('admin-pages') 

 <h1 class="text-center bg-light my-5">Edit Informations</h1>
 
 
 
 

 
 
 
 
 @foreach($editcat as $editcat)
		    <form action="{{ url('admin/upcat/'.$editcat->id) }}"  method="post" enctype="multipart/form-data" >
			@csrf
			
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Category Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" required="" name="name" id="name" 
					value="{{ $editcat->cat_name }}" /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group " readonly type="text" name="id" value="" id="username" placeholder="Enter ID"  /> 
					* you cannot change ID.
					</div>
					
		    	</div>
				
				
				
				
				
				
				
				
				
				
				
				<div class="clearfix"></div>
				
				<input type="submit" name="editcat" value="Save" class="px-3 py-2 btn btn-secondary  font-italic" />
				
		    </form>
		    @endforeach

		    @endsection