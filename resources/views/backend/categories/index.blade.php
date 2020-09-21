@extends('backend')
@section('content')
		<div class="container-fluid">

          <!-- Page Heading -->
          	<div class="d-sm-flex align-items-center justify-content-between mb-4">
          		<div class="row">
            	<h1 class="h3 mb-0 text-gray-800">Category List</h1>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-left: 85%;">
        	<a href="{{route('categories.create')}}" class="btn btn-info">
       	Add New
       </a>
        </div>
        <table class = "table table-bordered">
        	<thead class="table-dark">
        		<tr>
        			<th>No</th>
        			
        			<th>Name</th>
        			
        			<th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
        		@php $i=1; @endphp
        		
        		@foreach($categories as $category)  
        		<tr>
        			<td>{{$i++}}</td>
        			
        			<td>{{$category->name}}</td>
        			
        			<td>
                        <form method="post" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure you want to delete?')" class="d-inline-block">
                          @csrf
                          @method('DELETE')  
                          
                          <input type="submit" class="btn btn-danger" value="Delete">
                        </form>

        				
        				<a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">Edit</a>
        			</td>

        		</tr>
        		@endforeach
        	</tbody>
        </table>
@endsection