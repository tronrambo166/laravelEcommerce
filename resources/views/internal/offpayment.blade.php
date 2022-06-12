@extends('internal.layout3')
@section('page')
		
		<!-- Menu -->
		
			@php $grand=Crypt::decrypt($amount);
			$t_pro=Crypt::decrypt($t_pro);
			$t_quan=Crypt::decrypt($t_quan);  @endphp	

		
		
		<!-- Body -->
		
		<div class="container">
		
		<div class="row my-4">
			<div class="col-sm-4 bg-primary py-2"><b> Total Products: {{$t_pro}}</b></div>
			<div class="col-sm-4 bg-light  py-2"><b> Total Quantity: {{$t_quan}}</b></div>
			<div class="col-sm-4 bg-primary  py-2"> 
			<b>Total (<small>vat included</small>): ${{$grand}}</b></div>
			
		</div>

		<form action="{{url('orders/'.$grand.'/'.$t_quan)}}" method="post"> @csrf

			<input hidden type="text" name="iq" value="{{$iq}}"/>

		<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">Full Name</label></div>
			<div class="col-sm-6"><input class="form-control" type="text" name="name" required="" placeholder="Enter Full Name"/></div> </div>

			<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">Phone NO</label></div>
			<div class="col-sm-6"><input class="form-control" type="text" name="phone" required="" placeholder="Enter Phone"/>
			</div> </div> 

			<div class="row form-group mb-4">
			<div class="col-sm-3 font-weight-bold text-right"><label for="">Address</label></div>
			<div class="col-sm-6"><input class="form-control" type="text" name="address" required="" placeholder="Enter Address"/>
			</div> </div> 

	 <div class="mt-5 text-center "><input type="submit" style="color:white;background:red" href="" class="font-italic font-weight-bold btn  w-25 rounded-circle" Value="Order Now" /></div>

	                 @php $grand=Crypt:: encrypt($grand);
                        $t_pro=Crypt:: encrypt($t_pro);
                        $t_quan=Crypt:: encrypt($t_quan);
                     @endphp

	 <div class="mt-5 text-center "><a  href="{{url('payments/'.$grand.'/'.$t_pro.'/'.$t_quan.'/'.$iq)}}" class="font-italic font-weight-bold btn btn-warning text-dark w-25 rounded">Back</a></div>

	 </form>
		
		
		</div>
		
		
		<!-- Body -->
		
	
	
	


	<script type="text/javascript">
		function testPayment() {
			// body...
			alert('Order placed successfully!');
		}

	</script>
	
	@endsection
	<div class="clearfix  "></div>
	

	
	
