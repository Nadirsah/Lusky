@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('updatehaqqimizda')}}" method="POST" enctype="multipart/form-data">
@csrf

<input type="hidden" name="id" value="{{$data['id']}}">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Basliq</label>
    <input type="text" name="basliq" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['basliq']}}">
    </div>
 
   
    <div class="mb-3">
    <label for="exampleInputabout" class="form-label">Haqqinda</label>
    <input type="text" name="about" class="form-control" id="exampleInputabout" aria-describedby="emailHelp" value="{{$data['about']}}">
    </div>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>


@endsection;
    
       
       
         
      
