
@extends('admin.index')

@section('admin-pages') 


<h3  class="my-4 h3 bg-primary font-weight-bold">All Categories  </h3>
<h3 class="text-center font-weight-bold bg-light"><b class="bg-success" > {{ Session:: get('success') }}</b> </h3>




<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Category Name </th>
			<th>ID</th>
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	

	@foreach($cat as $cat)
	<tbody>

		<tr>
			<td>{{ $cat->cat_name }}</td>
			<td>{{ $cat->id }}</td>
			
			<td class="text-center">
			<a href="{{ url('admin/edit-category/'.$cat->id) }}" class=" mr-1 btn btn-info">Edit</a>
			<a onclick="return confirm('Are you sure to delete?')" href="{{ url('admin/delcat/'.$cat->id) }}" class=" btn btn-danger">Delete</a>

			</td>
		</tr>
	
	</tbody> @endforeach
	
	
</table>


@endsection