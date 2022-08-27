@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('Selaqe')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefon</label>
    <input type="text" name="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
    </div>
    <div class="mb-3">
    <label for="exampleInputimage" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputimage" >
    </div>
    <div class="mb-3">
    <label for="exampleInputabout" class="form-label">Unvan</label>
    <input type="text" name="unvan" class="form-control" id="exampleInputabout" aria-describedby="emailHelp" >
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
      <th scope="col">tel</th>
      <th scope="col">email</th>
      <th scope="col">unvan</th>
      
      <th scope="col">Duymeler</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $datas)
    <tr>
      <th>{{$datas->id}}</th>
      <td>{{$datas->tel}}</td>
      <td>{{$datas->email}}</td>
      <td>{{$datas->unvan}}</td>
     
      <td><a href="{{'Editelaqe/'.$datas['id']}}"><i class="fa-solid fa-pen-to-square text-info"></i></a>
    <a href="{{'deleteelaqe/'.$datas['id']}}"><i class="fa-solid fa-trash-can text-danger"></i></a>
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
    
       
       
         
      
