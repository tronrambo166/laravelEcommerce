@extends('internal.layout')
@section('page')
		
		<!-- Menu -->
		
		
		
		
		<!-- Body -->
		
		<div class="container">
		
		
	
    	

		<div class="row">
			
				<div class="col-sm-8 m-auto">
			
			<div class="my-5 text-left">
				<h2 class="h1 w-100  bg-light text-center font-italic px-4 "><span class="ml-5 font-weight-bold text-danger" >Your Informations</span> </h2> 
			</div>
			
		    <form action=""  method="post" enctype="multipart/form-data">
			
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class=" bg-light col-sm-7 text-center text-dark"> 
					{{ $users->name }}
					</div>
					
		    	</div>
				
				
			
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Email</strong></label></div>
					
		    		<div class="  bg-light col-sm-7 text-center text-dark"> 
					{{ $users->email }}
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="password"><strong>Password</strong></label></div>
					
					<div class="  bg-light col-sm-7 text-center text-dark"> 
					{{ '********' }}
					</div>
					
		    	</div>
				
				 </form>
					
		    	</div>
		    	</div>
				
				
		   

<div class="text-center"><button type="button" class="my-4 mx-auto d-inline btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Edit info
</button>  </div>


		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form  method="post" id="editProfile"> @csrf
		<div class="row form-group mb-4">
			<input hidden class="form-control" name="usr_id" type="text" id="usr_id"  value="{{Auth::user()->id}}"/>

			<div class="col-sm-3 font-weight-bold text-right"><label for="">Name</label></div>
			<div class="col-sm-6"><input class="form-control" type="text" name="name" required="" value="{{ $users->name }}"/></div> </div>

			<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">Email</label></div>
			<div class="col-sm-6"><input class="form-control" type="text" name="email" required="" value="{{ $users->email }}"/></div> </div>
		
		<div class="row form-group mb-1">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">Old Password</label></div>
			<div class="col-sm-6"><input class="form-control" type="text" name="old_pass" required="" value=""/></div> </div>

			<div id="pass_err" class="text-center"></div>
		
		<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">New Password</label></div>
			<div class="col-sm-6"><input class="form-control" type="text" name="new_pass" required="" value=""/></div>   </div>
		


			

	 <div class="mt-5 text-center "><input type="submit" name="submit" style="color:white;background:red" href="" class="font-italic font-weight-bold btn  w-25 rounded-circle" Value="Save Changes" /> </div>

	 </form>
		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

			
			
			
				
				</div>
		<!-- Body -->

<div class="clear"></div>



	

 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	 

	 <script type="text/javascript">
	 
	 </script>


	 <script>
	 	 //function test(){  var usr_id = $('#usr_id').val();  alert('User is='+usr_id); }

    //$(document).ready(function() {
    // Update Data

       /* $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); */

        $('#editProfile').on('submit', function(e){ 
        	e.preventDefault();  
        	var usr_id = $('#usr_id').val();

            $.ajax({
            	 url: "edit/"+usr_id,
                method: "POST",
                data: $('#editProfile').serialize(),
                dataType:'json',
                success: function (response) {
                    console.log(response);
                    alert("Profile Updated");
                    location.reload();
                },
                error:function(error){
                    console.log(error);
                    // alert("Password dont match!");
      $('#pass_err').html("<h6><span style='color:red;'>Password don't match!</span></h6>");                 }
           
            });
        });

       // });


   

</script>

{{--
 <script type="text/javascript">
                // Other input/div value changes when one input is changed

            $("input[name='radio-group']").on('change', function(e){  

      var value = $(this).val();
    var j = document.getElementById("theprice");
    if(value=='size30x40cm') j.innerHTML = "$29";
    else if(value=='size50x70cm') j.innerHTML = "$49";
    else if(value=='size70x100cm') j.innerHTML = "$69";
    
     });   
            // Other input/div value changes when one input is changed

</script> --}}


 
	
		@endsection
	