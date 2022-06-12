@extends('internal.layout3')
@section('page')
		<!-- Menu -->
		
	@php $grand=Crypt::decrypt($amount);
			$t_pro=Crypt::decrypt($t_pro);
			$t_quan=Crypt::decrypt($t_quan);  @endphp	
		
		
		<!-- Body -->
		
		<div class="container">
		
		<div class="row mt-3">
		<div class="col-sm-9  py-2"> 
		
		<form action="" method="POST">
		
		<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">Full Name</label></div>
			
			<div class="col-sm-6"><input class="form-control" type="text" name="name" required="" placeholder="Enter Full Name"/></div>
			
		</div>
		
		
		<div class="row form-group mb-4">
			<div class="col-sm-3 mt-1 font-weight-bold text-right"><label for="">Card Number</label></div>
			
			<div class="col-sm-6"><input class=" mt-1 form-control" type="text" name="name" required="" placeholder="Enter 16 Digit Number"/></div>
			
			<div class="col-sm-3"> <i  class="fab fa-cc-mastercard fa-3x"></i> <i style="color:red" class="fab fa-cc-visa fa-3x"></i> </div>
			
		</div>
		
		<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">CVV(3 Digits)</label></div>
			
			<div class="col-sm-6"><input class="form-control" type="text" name="name" required="" placeholder="Enter 3  Digit CVV"/></div>
			
		</div>
		
		
		<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">Expire Date</label></div>
			
			<div class="col-sm-6">
            <div class="row">
            	<div class="col-sm-6">
							<select name="month" class="form-control" placeholder="Month"required=""  id="">
							<option  hidden value="">Month</option>
							<option  value="1">01</option>
							<option  value="2">02</option>
							<option  value="3">03</option>
							<option  value="4">04</option>
							<option  value="5">05</option>
							<option  value="6">06</option>
							<option  value="7">07</option>
							<option  value="8">08</option>
							<option  value="9">09</option>
							<option  value="10">10</option>
							<option  value="11">11</option>
							<option  value="12">12</option>
							</select>
				
				</div>
				
				
				
				<div class="col-sm-6">
							<select name="year" class="form-control" required="" placeholder="Year" id="">
							<option hidden value="">Year</option>
							<option value=""></option>
							<option value="21">2021</option>
							<option value="22">2022</option>
							<option value="23">2023</option>
							<option value="24">2024</option>
							<option value="25">2025</option>
							<option value="26">2026</option>
							<option value="27">2027</option>
							</select>
				
				</div>
				
            </div>			
			
			</div>
			
		</div>
		
		
			 <div class="mt-5 text-center "><input onclick="testPayment()" name="onpayment" value="Order Now" type="submit"style="color:white;background:red" class=" font-italic font-weight-bold btn w-25 rounded-circle" /> </div>

		@php $grands=Crypt:: encrypt($grand);
                        $t_pro=Crypt:: encrypt($t_pro);
                        $t_quan=Crypt:: encrypt($t_quan);
                     @endphp

	 <div class="mt-5 text-center "><a  href="{{url('payments/'.$grands.'/'.$t_pro.'/'.$t_quan.'/'.$iq)}}" class="font-italic font-weight-bold btn btn-warning text-dark w-25 rounded">Back</a></div>

		
		</form>
		
		
		</div>         
   

                 <div class="col-sm-3  font-weight-bold py-2 mt-2 text-dark font-italic h5"> Total (<small>vat included</small>): ${{$grand}}</div>

		
			
		</div>
		
		
		

		
		</div>
		
		
		<!-- Body -->
		
	
	
	
	
	@endsection
	<div class="clearfix "></div>
	
	
	
	