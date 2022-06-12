@extends('admin.index')

@section('admin-pages') 
			
			<div class="row">
			<h3 class="bg-success w-100 text-center"></h3>
			
				<div class="col-sm-8">
			
			<div class="my-5 text-center">
				<h2 class="h1 d-inline bg-light px-4 ">ID : </h2> <h2 class="h1 d-inline"></h2>
			</div>
			
		    <form action=""  method="post" enctype="multipart/form-data">
			
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class=" bg-dark col-sm-7 text-center text-light"> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="username"><strong>ID</strong></label></div>
					
		    		<div class=" bg-dark col-sm-7 text-center text-light"> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Email</strong></label></div>
					
		    		<div class=" bg-dark col-sm-7 text-center text-light"> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="password"><strong>Password</strong></label></div>
					
					<div class=" bg-dark col-sm-7 text-center text-light"> 
					
					</div>
					
		    	</div>
				
				
		    </form>
			</div>
			
			
			<div class="col-sm-4 mt-5">
		    		<div class="ml-5 my-5"><label for=""><strong class="font-italic bg-info px-5 py-1" >Photo</strong></label></div>
					
					<div class=" mb-3 bg-dark text-center text-light"> 
					<img style="width:250px"src="images/logo.png" alt="" />
					</div>
                  <div class="my-4 "> <a href="{{ route('editprofile') }}" class="" value="" >Edit Profile</a>
				  </div>
					
		    	</div>
				
				</div>
			

			@endsection
			
			 
			
			