@extends('admin.index')

@section('admin-pages')  
 <h1 class="text-center bg-light my-5">Edit Profile</h1>
 
 
 
 
 
 
 
 
 
 
 
 <form action=""  method="post" enctype="multipart/form-data" >
			
			
			<div class="row">
				<div class="col-sm-9">
				
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" value="" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="id"><strong>ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="id" placeholder="Enter ID "value=" " readonly /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="author"><strong>Email</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="email" id="author" placeholder="Enter author name"  value="" /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="publication"><strong>Password</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="password" id="publication" placeholder="Enter publication name"  value="" /> 
					
					</div>
					
		    	</div>
				
				</div>
			
				
				
				<div class="col-sm-3 mt-5">
		    		<div class="col-sm-2 my-2"><label for=""><strong class="font-italic bg-info px-5 py-1" >Photo</strong></label></div>
					
					<div class=" mb-3 bg-dark col-sm-7 text-center text-light"> 
					<img style="width:250px"src="images/logo.png" alt="" />
					</div>
					
									<input type="file" name="file" />  

					
		    	</div>
				
				</div>
			
				
				
			
				
				
				
				
				
				
				
				
				
				<input type="submit" name="save_profile" value="Save" class="px-5 py-2 btn btn-dark text-primary font-weight-bold font-italic" />
				
		    </form>
			
			<div class="clearfix my-5"></div>
			@endsection