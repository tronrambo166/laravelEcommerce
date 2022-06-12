@extends('internal.layout')
@section('page') 
		
		<!-- Menu -->
		
		
		
		
		<!-- Body -->
		
		<div class="container">
		
		
		<div class="content">
    	<div class="content_top">
    		
			
   @foreach
		<h2 class="my-5 py-1 bg-light text-dark w-100 text-center font-italic font-weight-bold">
		Products under the category: </h2>
	@endforeach
	
	
    		
    		<div class="clear"></div>
    	</div>
	     

        <div class="w-100">
		
		 <div style="width:100%" class="section group float-left">
				<div class="row">
				
				
				foreach
				
				<div class="col-sm-3 sec1 ">
				
				<div class="border">
				<img src=" " alt="" class="d-block m-auto" />
				<h3 class="text-dark" ></h3>
				<p class="py-1 text-center" style="color:#6c6e69; font: italic 14px/24px 'OpenSans';text-align:left" >
				             </p>
				
				<h4 class="h5 text-success text-center font-weight-bold"> $.00</h4>
				
				<a href="" style="border-radius:6px;height:34px;font-weight:bold"
				class="w-50 m-auto bg-primary text-dark text-center font-italic ">Details</a>
				
				
				</div>
				</div>
				
				
				</div>
				
				
			</div>
		
		
		
		
		
		
		</div>		 

		
		
		
		
		
		 <div class="content_bottom">
    		
			<div class="heading">
    		
    		</div>
    		
    	</div>
			<div class="section group">
				
			</div>
    </div>
		
		
		
		</div>
		
		
		<!-- Body -->
		
		
	</div>
	@endsection
	<div class="clear"></div>
	
	
	