@extends('layout.index')
@section('content')
@if(Session::has('danger'))
<div class="alert alert-danger">
  {{Session::get('danger')}}
</div>
@endif

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <div class="card" style="width:50%;margin-left:20%; margin-top:5%;">
  <div class="card-body">
  <form action="{{route('update',$data->id)}}" method="post">
    @csrf
  <div class="row mb-3" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="name" value="{{$data->name }}">
    </div>
  </div>
 
  <fieldset class="row mb-3"style="margin-left: 10%;" >
    <legend class="col-form-label col-sm-2 pt-0">gender</legend>
    <div class="col-sm-8">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
        <label class="form-check-label" for="gridRadios1">
         male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
        <label class="form-check-label" for="gridRadios2">
         female
        </label>
      </div>
    </fieldset>
    <div class="row mb-3"style="margin-left:10%;marhin-top:10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">subject</label>
    <div class="col-sm-8">
  <select class="form-select" aria-label="Default select example" name="subject" value="{{ $data->subject}}"> 
  <option selected>{{$data->subject}}</option>
  <option value="maths">maths</option>
  <option value="english">english</option>
  <option value="physics">physics</option>
</select>
    </div>
    </div>
  
    <div class="row mb-3"style="margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">mark</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="mark" value="{{$data->mark}}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left: 40%;">update</button>
</form>
  </div>
</div>
 @endsection
  </body>
</html>
