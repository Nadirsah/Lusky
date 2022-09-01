@extends('admin.master');
@section('content');
<div id="layoutSidenav_content">
<form action="{{route('updateqidaitem',['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
@csrf


<div class="mb-3">
<label for="exampleselect" class="form-label">Kategoriya secin</label>
<select name="items_id" id="exampleselect">

@foreach($item as $items)
<option value="{{$items->id}}"   {{$product->items_id == $items->id ? "selected":''}}>{{$items->basliq}}</option>
@endforeach

</select>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Basliq</label>
    <input type="text" name="basliq" value="{{$product->basliq}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
    </div>
  
  
  <button type="submit" class="btn btn-primary text-info">Submit</button>
</form>
</div>



@endsection;
    
       
       
         
      
