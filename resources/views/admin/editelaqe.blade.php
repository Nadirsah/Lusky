@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('updateelaqe')}}" method="POST" enctype="multipart/form-data">
@csrf

<input type="hidden" name="id" value="{{$data['id']}}">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefon</label>
    <input type="text" name="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['tel']}}">
    </div>
 
    <div class="mb-3">
    <label for="exampleInputimage" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputimage" aria-describedby="emailHelp" value="{{$data['email']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputabout" class="form-label">Unvan</label>
    <input type="text" name="unvan" class="form-control" id="exampleInputabout" aria-describedby="emailHelp" value="{{$data['unvan']}}">
    </div>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>


@endsection;
    
       
       
         
      
