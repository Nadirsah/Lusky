@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('updateofisitem')}}" method="POST" enctype="multipart/form-data">
@csrf

<div class="mb-3">
<label for="exampleselect" class="form-label">Kategoriya secin</label>
<select name="category_id" id="exampleselect">

@foreach($kate as $kates)
<option value="{{$kates->id}}"  {{$item->category_id == $kates->id ? "selected":''}}>{{$kates->basliq}}</option>
@endforeach

</select>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Basliq</label>
    <input type="text" name="basliq" value="{{$item->basliq}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
    </div>
   
  
  <button type="submit" class="btn btn-primary text-info">Submit</button>
</form>












</div>


@endsection;
    
       
       
         
      
