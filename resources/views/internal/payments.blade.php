@extends('internal.layout3')

@section('page')
		
		<!-- Menu -->
		
		@php $grand=$amount; 
		/* Crypt::decrypt($amount); */
		 @endphp
		
		
		<!-- Body -->
		
		<div class="container">
		
		<div class="row mt-3">
			<div class="col-sm-3 "></div> 
			<div class="col-sm-3 pr-0 "><a href="{{url('offpayments/'.$grand.'/'.$t_pro.'/'.$t_quan.'/'.$iq)}}" class="w-100 off rounded font-weight-bold btn btn-danger py-2">Offline Payment</a></div>

			<div class="col-sm-3 pl-0 "><a href="{{url('onpayments/'.$grand.'/'.$t_pro.'/'.$t_quan.'/'.$iq)}}" class="w-100 on rounded font-weight-bold btn btn-success py-2">Online Payment</a></div>
			<div class="col-sm-3 "></div>
		</div>
	
		
		
		
		
		
		<!-- Body -->
		
		
	</div>
	
@endsection

<div class="clearfix  "> </div>