@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('updatecatdirilma')}}" method="POST" enctype="multipart/form-data">
@csrf

<input type="hidden" name="id" value="{{$data['id']}}">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Catdirilma qiymeti</label>
    <input type="text" name="cat_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus value="{{$data['cat_price']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputimage" class="form-label">Catdirilma qiymeti haqqinda</label>
    <input type="text" name="cat_price_title" class="form-control" id="exampleInputimage" value="{{$data['cat_price_title']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputabout" class="form-label">Catdirilma muddeti</label>
    <input type="text" name="cat_time" class="form-control" id="exampleInputabout" aria-describedby="emailHelp" value="{{$data['cat_time']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputprice" class="form-label">Catdirilma muddeti haqqinda</label>
    <input type="text" name="cat_time_title" class="form-control" id="exampleInputprice" aria-describedby="emailHelp" value="{{$data['cat_time_title']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputsert" class="form-label">Catdirilma serti</label>
    <input type="text" name="cat_sert" class="form-control" id="exampleInputsert" aria-describedby="emailHelp" value="{{$data['cat_sert']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputsertabout" class="form-label">Catdirilma serti haqqinda</label>
    <input type="text" name="cat_sert_title" class="form-control" id="exampleInputsertabout" aria-describedby="emailHelp" value="{{$data['cat_sert_title']}}">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>


@endsection;
    
       
       
         
      
