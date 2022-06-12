
@extends('admin.index')
@section('admin-pages') 

<h3  class="my-4 h3 bg-primary font-weight-bold">All Products  </h3>
<div class="text-center bg-success mb-5"><b class="bg-success" > {{ Session:: get('success') }}</b>
</div>



<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Product Name </th>
			<th width="30%" > Product Images</th>
			
			<th>Category</th>
			<th>Brand</th>
			<th class="w-25">Description</th>
			<th>Price ($USD)</th>
			<th>Status</th>
			
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	
	@foreach($product as $product)
	<tbody>

		<tr>
			<td>{{ $product->pro_name }}</td>
			
			<td > @foreach($images as $image) @if($product->id == $image->product_id)
			 <img style="width:60px; height:60px" src="{{ asset('../../'.$image->image_name) }}" alt="" />
			@endif @endforeach </td>
			 

			<td>{{ $product->cat_name }}</td>
			
			<td>{{ $product->brand_name }}</td>
				<td> {{ $product->description }}</td>
					<td>${{$product->price }} </td>

				{{--	<td> <input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" id="cstatus" data-id="{{$product->id}}" {{$product->status == 1? 'checked' :''}} > </td> --}}
						
		 <td> <a href=""  type="button" onclick="changeStatus({{$product->id}},{{$product->status}}) //; return false" class="status @if ($product->status == '1') {{ 'btn btn-success disabled'}} @else {{ 'btn btn-light'}} @endif  text-center py-0  "> Active </a>


			<a  type="button"  onclick="changeStatus({{$product->id}},{{$product->status}})
			//; return false" 
				href="" class="status @if ($product->status == '0') {{ 'btn btn-success disabled'}} @else {{ 'btn btn-light'}} @endif  text-center py-0 "> Inactive </a> 
			
			<td class="text-center">
			<a href="{{ url('admin/edit-product/'.$product->id) }}" class=" mr-1 btn btn-info py-0">Edit</a>
			<a onclick="return confirm('Are you sure to delete?')" href="{{ url('admin/delpro/'.$product->id) }}" class=" btn btn-danger py-0 ">Delete</a>

			</td>
		</tr>
		
		
		
	</tbody> @endforeach
	
	
</table>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

 <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


 
<script type="text/javascript">
	function changeStatus(id,status) { 
		var id=id;
		var status=status;
		//alert(id);// alert(status);


		$.ajax({ //console.log("YES"); you cant use console or alert inside $.ajax()

			url:'productStatus/'+id+'/'+status,
			method:'get',
			success: function(result){
				console.log(result);
			},
			error:function(result){
           console.log("Fail");
         }

		});
		document.location.reload(true);

	}


	 </script> 
	 	{{-- 2nd method --}}

	 


	 @if (Request::ajax())
    <p>AJAX WORKING</p> @else <p>AJAX not  WORKING</p
@endif
@endsection


