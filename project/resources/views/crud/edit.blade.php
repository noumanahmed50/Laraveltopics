@extends('template.default')
@section('content')
<div class="main-content">
  <section class="section">
<form action="{{route('user-update')}}" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{$data['id']}}">
<section class="section">
         
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit User Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                        <thead>
                          <tr>
          
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Image</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            
                            <td><input type="text" name="name" value="{{$data['name']}}"></td>
                            <td><input type="text" name="email"  value="{{$data['email']}}"></td>
                            <td><input type="text" name="phone" value="{{$data['phone']}}"></td>
                            <td><input type="file" name="image" value="{{$data['image']}}"></td>

                          </tr>
                          <tr>

                          </tr>
                        
                      </table>
                      <tfoot>
                            <button type="submit">Update Data</button>
                          </tfoot>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </form>               
                        
                      </table>
                    <input style="position: absolute; top: 215px; left: 25px; padding: 0px 10px; text-align: left; font: 300 14px / 21px &quot;Hind Vadodara&quot;, &quot;Segoe UI&quot;, arial; border: 0px none rgb(117, 121, 130); width: 256.365px; height: 50px; display: none;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

         </section>
@endsection



