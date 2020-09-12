@extends('backend')
@section('content')
		<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
            </div>
         </div>
         <div class="row">
         	<div class="col-md-6">
         		<div class="col-md-12">
        {{-- start bootstrap  --}}
         			<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
         				@csrf
         				@method('PUT')
         				
         				<div class="form-group row">
         					<label for="inputName" class="col-sm-2 col-form-label">Name</label>
         					<div class="col-sm-10">
         						<input type="text" class="form-control" id="inputName" name="name" value="{{$item->name}}">
         					</div>
         				</div>
         				<div class="form-group row">
         					<label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
         					<div class="col-sm-10">
         						<input type="file" class="form-control" id="inputPhoto" name="photo" >
         						<img src="{{asset($item->photo)}}" width="120" height="100">
         						<input type="hidden" name="oldphoto" value="{{$item->photo}}">
         					</div>
         				</div>
         				<div class="form-group row">
         					<label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
         					<div class="col-sm-10">
         						<input type="number" class="form-control" id="inputPrice" name="price" value="{{$item->price}}">
         					</div>
         				</div>
         				
         				<div class="form-group row">
         					<label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
         					<div class="col-sm-10">
         						<textarea cols="40" rows="5" name="description">
         							{{$item->description}}
         						</textarea>
         					</div>
         				</div>
                     <div class="form-group row">
                        <label for="inputTechnology" class="col-sm-2 col-form-label">Technology</label>
                        <div class="col-sm-10">
                           <textarea cols="40" rows="5" name="technology">
                              {{$item->technology}}
                           </textarea>
                        </div>
                     </div>
         				<div class="form-group row">
         					<select class="form-control form-control-md" id="inputCategory" 			name="category">
         						<optgroup label="Choose Category">
         							@foreach($categories as $category)
         							<option value="{{$category->id}}">{{$category->name}}</option>
         							@endforeach
         						</optgroup>
         						
         					</select>

         					
         				</div>
         				

         				
         				<div class="form-group row">
         					<div class="col-sm-10">
         						<button type="submit" class="btn btn-primary" name="save" value="Create">Update</button>
         					</div>
         				</div>
</form>
        {{-- end bootstrap --}}
         		</div>
         	</div>
         </div>
@endsection