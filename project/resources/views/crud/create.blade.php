@extends('template.default')
@section('content')
<div class="main-content">
	<section class="section">
		<div>
		
		</div>
		<form action="{{route('user-submit')}}" method="POST" enctype="multipart/form-data">
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
											    <label style="color:red">Name *</label>												
											    <input type="text" class="form-control " name="name" value="{{old('name')}}"/>
											<span style="color:red">@error('name'){{$message}}@enderror</span><br>
												
									        </div>
									        </div>
									        	<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="form-group">
												
											   				 <label style="color:red">Email *</label>
											   				 <input type="text" class="form-control" name="email" value="{{old('email')}}"/>
															<span style="color:red">@error('email'){{$message}}@enderror</span><br>

									       			 </div>
									   			 </div>
										
									    <!-- <div class="col-lg-4 col-md-4 col-sm-12">
											<div class="form-group">
												
											    <label style="color:red"> Contact *</label>
											    <input type="text" class="form-control" name="phone" value="{{old('phone')}}"/>
												<span style="color:red">@error('phone'){{$message}}@enderror</span><br>

									        </div> -->
									    </div>
										<div class="col-lg-6 col-md-4 col-sm-12">
											<div class="form-group">
												
											    <label style="color:red">Upload Images *</label>
											    <input type="file" class="form-control" name="image[]" multiple="multiple" value="{{old('image')}}"/>
												<span style="color:red">@error('image'){{$message}}@enderror</span><br>

									        </div>
									    
										</div>

										<div class="col-lg-6 col-md-4 col-sm-12">
											<div class="form-group">
												
											    <label style="color:red">Country *</label>
											    <input type="text" class="form-control" name="country" value="{{old('country')}}"/>
												<span style="color:red">@error('country'){{$message}}@enderror</span><br>

									        </div>
									    
										</div>

										
										<div class="col-lg-6 col-md-4 col-sm-12">
											<div class="form-group">
												
											    <label style="color:red">Title *</label>
											    <input type="text" class="form-control" name="title" value="{{old('title')}}"/>
												<span style="color:red">@error('title'){{$message}}@enderror</span><br>

									        </div>
									    
										</div>
										<div class="col-lg-6 col-md-4 col-sm-12">
											<div class="form-group">
												
											    <label style="color:red">Post *</label>
											    <input type="text" class="form-control" name="post" value="{{old('post')}}"/>
												<span style="color:red">@error('post'){{$message}}@enderror</span><br>

									        </div>
									    
										</div>
										<div class="col-lg-6 col-md-4 col-sm-12">
											<div class="form-group">
												
											    <label style="color:red">city *</label>
											    <input type="text" class="form-control" name="city" value="{{old('city')}}"/>
												<span style="color:red">@error('city'){{$message}}@enderror</span><br>

									        </div>
									    
										</div>
                                	<div class="col-lg-12">
                                		<button type="submit" class="btn btn-success" style="float: right;">Submit</button>
                                	</div>
                                	
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