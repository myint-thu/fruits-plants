@extends('backend')
@section('content')
		<div class="container-fluid">

          <!-- Page Heading -->
          	<div class="d-sm-flex align-items-center justify-content-between mb-4">
          		<div class="row">
            	<h1 class="h3 mb-0 text-gray-800">Item List</h1>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-left: 85%;">
        	<a href="{{route('items.create')}}" class="btn btn-info">
       	Add New
       </a>
        </div>
        <table class = "table table-bordered">
        	<thead class="table-dark">
        		<tr>
        			<th>No</th>
        			<th>Name</th>
        			{{-- <th>Photo</th> --}}
        			<th>Price</th>
                    {{-- <th>Description</th> --}}
                    <th>Technology</th>
                    <th>Action</th>

        		</tr>
        	</thead>
        	<tbody>
        		@php $i=1; @endphp
        		{{-- $items->array $item->no of object --}}
        		@foreach($items as $item)  
        		<tr>
        			<td>{{$i++}}</td>
        			<td>{{$item->name}}</td>
        			<td>{{$item->price}} MMK</td>
                    <td>{{$item->technology}}</td>
        			<td><a href="#" class="btn btn-primary">Detail</a>
        				<a href="#" class="btn btn-danger">Delete</a>
        				<a href="{{route('items.edit',$item->id)}}" class="btn btn-info">Edit</a>
        			</td>

        		</tr>
        		@endforeach
        	</tbody>
        </table>
@endsection