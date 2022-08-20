@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('updatehediyyeitem')}}" method="POST" enctype="multipart/form-data">
@csrf

<input type="hidden" name="id" value="{{$data['id']}}">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Basliq</label>
    <input type="text" name="basliq" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['basliq']}}">
    </div>
 
    <div class="mb-3">
    <label for="exampleInputimage" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputimage" aria-describedby="emailHelp" value="{{$data['image']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputabout" class="form-label">Haqqinda</label>
    <input type="text" name="about" class="form-control" id="exampleInputabout" aria-describedby="emailHelp" value="{{$data['about']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputprice" class="form-label">Qiymet</label>
    <input type="text" name="price" class="form-control" id="exampleInputprice" aria-describedby="emailHelp" value="{{$data['price']}}">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>


@endsection;
    
       
       
         
      
