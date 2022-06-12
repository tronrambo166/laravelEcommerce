
@extends('admin.index')

@section('admin-pages') 


<h3  class="  mt-3 h3 text-success bg-dark text-center font-weight-bold">All Orders  </h3>
<h3 class="text-center font-weight-bold bg-light"><b class="text-success" > {{ Session:: get('success') }} </b> </h3>



@foreach($orders as $order)
<table class="display table table-bordered mb-4 " id="">
	<thead>
		<tr class="bg-danger">
			<th>Customer Name </th>
			<th>Products</th>
			<th>Address </th>
			<th>Phone</th>
			<th>Quantity</th>
			<th>Total</th>
			
			
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	<tr>

			<td> {{ $order->cust_name }}</td>

			
           <td>
           	@php $names=$order->product_names; $names=explode(',', $names); @endphp
            @foreach($names as $name) @if($name!='')
			 {{ $name }} <br> @endif @endforeach
			 </td>

			<td> {{ $order->cus_address }}</td>
			<td> {{ $order->cus_phone }}</td>
			<td> {{ $order->quantity }}</td>
			<td> ${{$order->total }}</td>
		
			<td class=" text-center">

		@if($order->shipped==0)
		<a href="{{url('admin/ship-order/'.$order->id)}}" class=" btn btn-dark">Ship</a>
		@else
	    <a href="" disabled class="disabled btn btn-dark">Shipped</a>   
		@endif
		<a href="{{url('admin/cancel-order/'.$order->id)}}" class=" btn btn-dark">
			@if($order->shipped==0) Cancel @else Remove @endif</a>
		</td>

		</tr>
		
		
		
	</tbody>
	
	
</table>  @endforeach  

@endsection



