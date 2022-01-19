
@extends('template.default')
@section('content')

  
<div class="row">
      <div class="col-lg-12">
        <a href="{{route('add-topic')}}" class="btn btn-dark" style="float: right;">Add a Topic</a>
      </div>
      
    </div>
    
    <div class="card">
      <div class="card-header">
        <h6>Laravel Topics </h6>
      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Topic Name</th>
              <th scope="col">Detail</th>
              <th scope="col">Actions</th>
              
            </tr>
          </thead>
          <tbody>
            @php $i=1
            @endphp
            
            @foreach($members as $m)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$m->topic_name}}</td>
              <td>{{$m->topic_dis}}</td>
              
              <td>
                <div class="btn-group dropdown">
                  <button type="button" class="btn btn-warning dropdown-toggle col-lg-12" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  
                  </button>
                  <div class="dropdown-menu dropright">
                    <a class="dropdown-item" href="{{route('edit-topic',['id'=>$m->id])}}">Edit</a>
                    <a class="dropdown-item" href="{{route('delete-topic',['id'=>$m->id])}}">Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <div>
          {{$members->links()}}
        </div>
      </div>
    </div>
 @endsection
   
 
 
