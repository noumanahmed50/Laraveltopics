  @extends('template.default')
@section('content')
<div class="main-content ">
  <section class="section">
    
   
      <div class=" " style="width:50%; float:left">
          <h6>User List </h6>
        </div>
        <div style="width:50%; float:right">
      <a href="{{route('user-form')}}" class="btn btn-dark" style="float: right;margin-bottom: 10px;">Add user</a>

      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <!-- <th scope="col">Contact</th> -->
              <th scope="col">Country</th>
              <th scope="col">Title</th>
              <th scope="col">Post</th>
              <th scope="col">City</th>

              <th scope="col">Image</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php
             $i=1
            @endphp
            
          @foreach($members as $m)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$m->name}}</td>
              <td>{{$m->email}}</td>
              <!-- <td>{{$m->phone}}</td> -->
              <td>{{$m->info()->first()->country}}</td>
              <td>{{$m->blog()->first()->title}}</td>
              <td>{{$m->blog()->first()->post}}</td>
              <td>{{$m->blog()->first()->city}}</td>
              
              <td>
              @foreach (json_decode($m->image) as $image)
                <img src="{{ asset('uploads/'.$image)}}" width="20px" height="20">
              @endforeach
              </td>
              
                  
              
             
             <td>
                <div class="btn-group dropdown">
                  <button type="button" class="btn btn-warning dropdown-toggle col-lg-12" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  
                  </button>
                  <div class="dropdown-menu dropright">
                    <a class="dropdown-item" href="{{route('user-edit',['id'=>$m->id])}}">Edit</a>
                    <a class="dropdown-item" href="{{route('user-deleted',['id'=>$m->id])}}">Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
    
    
  </section>
  @endsection