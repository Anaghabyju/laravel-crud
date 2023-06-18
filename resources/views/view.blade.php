@extends('layout.index')
 @section('content')
 @if(Session::has('danger'))
<div class="alert alert-danger">
  {{Session::get('danger')}}
</div>
@endif

<section class="content">
      <div class="container-fluid">
        <div class="row" style="margin-top: 5%;margin-left: 5%;">
          <div class="col-md-6">
           <table class="table table-bordered" >
                  <thead>
                    <tr>
                      <th>name</th>
                      <th>gender</th>
                      <th>subject</th>
                      <th>mark</th>
                      <th colspan="2">action</th>
                     
                      
                     </tr>
                </thead>
                  <tbody>
                    @foreach($data as $datas)
                    <tr>
                    <td>{{ $datas->name }}</td>
                    <td>{{ $datas->gender }}</td>
                    <td>{{ $datas->subject}}</td>
                    <td>{{ $datas->mark}}</td>
                    <td><a href="{{ route('edit',$datas->id) }}" class="btn btn-danger">edit</a></td>
                    <td><a href="{{ route('delete',$datas->id) }}" class="btn btn-success">delete</a></td>
                    
                  
                     </tr>
                   @endforeach
                </tbody>
                </table>
              </div>
                
              </div>
         @endsection