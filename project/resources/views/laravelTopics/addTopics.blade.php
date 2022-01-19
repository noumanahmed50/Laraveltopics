@include('template.head')


<div class="container" style="text-align:center; font-size:10px; padding-top:3%;">
    <h1>TOPICS</h1>
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <form action="{{route('submit-topic')}}" method="POST">  
          @csrf 
            <div class="card-body row">
              <div class="form-group col-lg-3">
                <label>Topic Name:</label>
                  <input type="text" name="topic_name" class="form-control" placeholder="Topic name">
              </div>
              <div class="form-group col-lg-9">
                <label>Discription:</label>
                  <input type="text" name="topic_dis" class="form-control" placeholder="Detail of topic">
              </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
</div>
@include('template.footer')