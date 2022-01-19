@extends('template.default')
@section('content')
<div class="main-content">
	<section class="section">
		
		<form action="{{route('user-submit')}}" method="Post">
			@csrf
			<div class="section-body">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4>Add user</h4>
							</div>
							<div class="card-body">
								<div class="row">
									
									<div class="col-lg-4 col-md-4 col-sm-12">
										    <div class="form-group">
											    <label>User Name</label>
											    <input type="text" class="form-control" name="name"/>
									        </div>
									        </div>
									        	<div class="col-lg-4 col-md-4 col-sm-12">
											<div class="form-group">
											    <label>Email</label>
											    <input type="text" class="form-control" name="email"/>
									        </div>
									    </div>
									    <div class="col-lg-4 col-md-4 col-sm-12">
											<div class="form-group">
											    <label>Contact</label>
											    <input type="text" class="form-control" name="phone"/>
									        </div>
									    </div>
									    <div class="col-lg-4 col-md-4 col-sm-12">
									        <div class="form-group">
											    <label>Password</label>
											    <input type="password" class="form-control" name="password"/>
									        </div>
									    </div>
                                    
                                 </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                		<button type="submit" class="btn btn-success" style="float: right;">Submit</button>
                                	</div>
                                	
                                </div>
                                 
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

	</section>
	@endsection