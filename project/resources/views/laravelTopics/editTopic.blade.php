@include('template.head')
<div class="main-content">
  <section class="section">
<form action="{{route('update-topic')}}" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{$data['id']}}">
<section class="section">
          <div class="section-header">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="section-header-breadcrumb-content">
                  <h1>User Information</h1>
                  
                </div>
              </div>
              
            </div>
          </div>
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
          
                            <th>Topic Name</th>
                            <th>Detail</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            
                            <td><input type="text" name="topic_name" value="{{$data['topic_name']}}"></td>
                            <td><input type="text" name="topic_dis"  value="{{$data['topic_dis']}}"></td>
                           
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





