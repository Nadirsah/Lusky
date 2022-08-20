@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('Selektronitem')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Basliq</label>
    <input type="text" name="basliq" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
    </div>
    <div class="mb-3">
    <label for="exampleInputimage" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputimage" >
    </div>
    <div class="mb-3">
    <label for="exampleInputabout" class="form-label">Haqqinda</label>
    <input type="text" name="about" class="form-control" id="exampleInputabout" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputprice" class="form-label">Qiymet</label>
    <input type="text" name="price" class="form-control" id="exampleInputprice" aria-describedby="emailHelp" >
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
      <th scope="col">Basliq</th>
      <th scope="col">Image</th>
      <th scope="col">Haqqinda</th>
      <th scope="col">qiymet</th>
      <th scope="col">Duymeler</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $datas)
    <tr>
      <th>{{$datas->id}}</th>
      <td>{{$datas->basliq}}</td>
      <td>{{$datas->image}}</td>
      <td>{{$datas->about}}</td>
      <td>{{$datas->price}}</td>
      <td><a href="{{'Editelektronitem/'.$datas['id']}}"><i class="fa-solid fa-pen-to-square text-info"></i></a>
    <a href="{{'deleteelektronitem/'.$datas['id']}}"><i class="fa-solid fa-trash-can text-danger"></i></a>
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
    
       
       
         
      
