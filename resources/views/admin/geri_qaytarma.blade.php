@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('Sgeri_qaytarma')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="exampleInputqayda_1" class="form-label">qayda_1</label>
    <input type="text" name="qayda_1" class="form-control" id="exampleInputqayda_1" aria-describedby="emailHelp" autofocus>
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_2" class="form-label">qayda_2</label>
    <input type="text" name="qayda_2" class="form-control" id="exampleInputqayda_2" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_3" class="form-label">qayda_3</label>
    <input type="text" name="qayda_3" class="form-control" id="exampleInputqayda_3" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_4" class="form-label">qayda_4</label>
    <input type="text" name="qayda_4" class="form-control" id="exampleInputqayda_4" aria-describedby="emailHelp" >
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_5" class="form-label">qayda_5</label>
    <input type="text" name="qayda_5" class="form-control" id="exampleInputqayda_5" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_6" class="form-label">qayda_6</label>
    <input type="text" name="qayda_6" class="form-control" id="exampleInputv" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_7" class="form-label">qayda_7</label>
    <input type="text" name="qayda_7" class="form-control" id="exampleInputqayda_7" aria-describedby="emailHelp" >
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_8" class="form-label">qayda_8</label>
    <input type="text" name="qayda_8" class="form-control" id="exampleInputqayda_8" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_9" class="form-label">qayda_9</label>
    <input type="text" name="qayda_9" class="form-control" id="exampleInputqayda_9" aria-describedby="emailHelp" >
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_10" class="form-label">qayda_10</label>
    <input type="text" name="qayda_10" class="form-control" id="exampleInputqayda_10" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_11" class="form-label">qayda_11</label>
    <input type="text" name="qayda_11" class="form-control" id="exampleInputqayda_11" aria-describedby="emailHelp" >
    </div>

    <div class="mb-3">
    <label for="exampleInputqayda_12" class="form-label">qayda_12</label>
    <input type="text" name="qayda_12" class="form-control" id="exampleInputqayda_12" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_13" class="form-label">qayda_13</label>
    <input type="text" name="qayda_13" class="form-control" id="exampleInputqayda_13" aria-describedby="emailHelp" >
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_14" class="form-label">qayda_14</label>
    <input type="text" name="qayda_14" class="form-control" id="exampleInputqayda_14" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_15" class="form-label">qayda_15</label>
    <input type="text" name="qayda_15" class="form-control" id="exampleInputqayda_15" aria-describedby="emailHelp" >
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
      <th scope="col">qayda_1</th>
      <th scope="col">qayda_2</th>
      <th scope="col">qayda_3</th>
      <th scope="col">qayda_4</th>
      <th scope="col">qayda_5</th>
      <th scope="col">qayda_6</th>
      <th scope="col">qayda_7</th>
      <th scope="col">qayda_8</th>
      <th scope="col">qayda_9</th>
      <th scope="col">qayda_10</th>
      <th scope="col">qayda_11</th>
      <th scope="col">qayda_12</th>
      <th scope="col">qayda_13</th>
      <th scope="col">qayda_14</th>
      <th scope="col">qayda_15</th>
      <th scope="col">Duymeler</th>
     
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $datas)
    <tr>
      <th>{{$datas->id}}</th>
      <td>{{$datas->qayda_1}}</td>
      <td>{{$datas->qayda_2}}</td>
      <td>{{$datas->qayda_3}}</td>
      <td>{{$datas->qayda_4}}</td>
      <td>{{$datas->qayda_5}}</td>
      <td>{{$datas->qayda_6}}</td>
      <td>{{$datas->qayda_7}}</td>
      <td>{{$datas->qayda_8}}</td>
      <td>{{$datas->qayda_9}}</td>
      <td>{{$datas->qayda_10}}</td>
      <td>{{$datas->qayda_11}}</td>
      <td>{{$datas->qayda_12}}</td>
      <td>{{$datas->qayda_13}}</td>
      <td>{{$datas->qayda_14}}</td>
      <td>{{$datas->qayda_15}}</td>
      
      <td><a href="{{'Editgeri_qaytarma/'.$datas['id']}}"><i class="fa-solid fa-pen-to-square text-info"></i></a>
    <a href="{{'deletegeri_qaytarma/'.$datas['id']}}"><i class="fa-solid fa-trash-can text-danger"></i></a>
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
    
       
       
         
      
