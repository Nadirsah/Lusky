@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('Scatdirilma')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Catdirilma qiymeti</label>
    <input type="text" name="cat_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
    </div>
    <div class="mb-3">
    <label for="exampleInputimage" class="form-label">Catdirilma qiymeti haqqinda</label>
    <input type="text" name="cat_price_title" class="form-control" id="exampleInputimage" >
    </div>
    <div class="mb-3">
    <label for="exampleInputabout" class="form-label">Catdirilma muddeti</label>
    <input type="text" name="cat_time" class="form-control" id="exampleInputabout" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputprice" class="form-label">Catdirilma muddeti haqqinda</label>
    <input type="text" name="cat_time_title" class="form-control" id="exampleInputprice" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputsert" class="form-label">Catdirilma serti</label>
    <input type="text" name="cat_sert" class="form-control" id="exampleInputsert" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputsertabout" class="form-label">Catdirilma serti haqqinda</label>
    <input type="text" name="cat_sert_title" class="form-control" id="exampleInputsertabout" aria-describedby="emailHelp" >
    </div>
 
  
  <button type="submit" class="btn btn-primary text-info">Submit</button>
</form>

<div class="container">
  <div class="row">
    <div class="col">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Catdirilma qiymeti</th>
      <th scope="col">Catdirilma qiymeti haqqinda</th>
      <th scope="col">Catdirilma muddeti </th>
      <th scope="col">Catdirilma muddeti haqqinda</th>
      <th scope="col">Catdirilma sert</th>
      <th scope="col">Catdirilma sert haqqinda</th>
      <th scope="col">Duymeler</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $datas)
    <tr>
      <th>{{$datas->id}}</th>
      <td>{{$datas->cat_price}}</td>
      <td>{{$datas->cat_price_title}}</td>
      <td>{{$datas->cat_time}}</td>
      <td>{{$datas->cat_time_title}}</td>
      <td>{{$datas->cat_sert}}</td>
      <td>{{$datas->cat_sert_title}}</td>
      <td><a href="{{'Editcatdirilma/'.$datas['id']}}"><i class="fa-solid fa-pen-to-square text-info"></i></a>
    <a href="{{'deletecatdirilma/'.$datas['id']}}"><i class="fa-solid fa-trash-can text-danger"></i></a>
    </td>
    
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</div>

{{$data->links()}}
</div>


@endsection;
    
       
       
         
      
