@extends('admin.index')

@section('admin-pages') 


<h3  class="my-4 h3 bg-primary font-weight-bold">All Brands  </h3>
<h3 class="text-center font-weight-bold bg-light"><b class="bg-success" > {{ Session:: get('success') }}</b> </h3>



<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Brand Name </th>
			<th>Brand ID</th>
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	

	@foreach($brands as $brands)
	<tbody>
	
		<tr>
			<td>{{ $brands->brand_name }}</td>
			<td>{{ $brands->id }}</td>
			
			<td class="text-center">
			<a onclick="return confirm('Are you sure to delete?')" href="{{ url('admin/delbrand/'.$brands->id) }}" class=" btn btn-danger">Delete</a>

			</td>

		</tr>
				
	</tbody>
		@endforeach
	
	
</table>


@endsection
