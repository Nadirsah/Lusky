@extends('admin.master');
@section('content');

<div id="layoutSidenav_content">
<form action="{{route('updategeri_qaytarma')}}" method="POST" enctype="multipart/form-data">
@csrf

<input type="hidden" name="id" value="{{$data['id']}}">
<div class="mb-3">
    <label for="exampleInputqayda_1" class="form-label">qayda_1</label>
    <input type="text" name="qayda_1" class="form-control" id="exampleInputqayda_1" aria-describedby="emailHelp" autofocus value="{{$data['qayda_1']}}">
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_2" class="form-label">qayda_2</label>
    <input type="text" name="qayda_2" class="form-control" id="exampleInputqayda_2" aria-describedby="emailHelp" value="{{$data['qayda_2']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_3" class="form-label">qayda_3</label>
    <input type="text" name="qayda_3" class="form-control" id="exampleInputqayda_3" aria-describedby="emailHelp" value="{{$data['qayda_3']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_4" class="form-label">qayda_4</label>
    <input type="text" name="qayda_4" class="form-control" id="exampleInputqayda_4" aria-describedby="emailHelp" value="{{$data['qayda_4']}}">
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_5" class="form-label">qayda_5</label>
    <input type="text" name="qayda_5" class="form-control" id="exampleInputqayda_5" aria-describedby="emailHelp" value="{{$data['qayda_5']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_6" class="form-label">qayda_6</label>
    <input type="text" name="qayda_6" class="form-control" id="exampleInputv" aria-describedby="emailHelp" value="{{$data['qayda_6']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_7" class="form-label">qayda_7</label>
    <input type="text" name="qayda_7" class="form-control" id="exampleInputqayda_7" aria-describedby="emailHelp" value="{{$data['qayda_7']}}">
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_8" class="form-label">qayda_8</label>
    <input type="text" name="qayda_8" class="form-control" id="exampleInputqayda_8" aria-describedby="emailHelp" value="{{$data['qayda_8']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_9" class="form-label">qayda_9</label>
    <input type="text" name="qayda_9" class="form-control" id="exampleInputqayda_9" aria-describedby="emailHelp" value="{{$data['qayda_9']}}">
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_10" class="form-label">qayda_10</label>
    <input type="text" name="qayda_10" class="form-control" id="exampleInputqayda_10" aria-describedby="emailHelp" value="{{$data['qayda_10']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_11" class="form-label">qayda_11</label>
    <input type="text" name="qayda_11" class="form-control" id="exampleInputqayda_11" aria-describedby="emailHelp" value="{{$data['qayda_11']}}">
    </div>

    <div class="mb-3">
    <label for="exampleInputqayda_12" class="form-label">qayda_12</label>
    <input type="text" name="qayda_12" class="form-control" id="exampleInputqayda_12" aria-describedby="emailHelp" value="{{$data['qayda_12']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_13" class="form-label">qayda_13</label>
    <input type="text" name="qayda_13" class="form-control" id="exampleInputqayda_13" aria-describedby="emailHelp" value="{{$data['qayda_13']}}">
    </div>
   
    <div class="mb-3">
    <label for="exampleInputqayda_14" class="form-label">qayda_14</label>
    <input type="text" name="qayda_14" class="form-control" id="exampleInputqayda_14" aria-describedby="emailHelp" value="{{$data['qayda_14']}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputqayda_15" class="form-label">qayda_15</label>
    <input type="text" name="qayda_15" class="form-control" id="exampleInputqayda_15" aria-describedby="emailHelp" value="{{$data['qayda_15']}}">
    </div>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>


@endsection;
    
       
       
         
      
