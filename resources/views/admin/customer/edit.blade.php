@extends('admin.layout.header')
<head>
	
<link rel="stylesheet" href="{{asset('css/product/edit.css')}}">

</head>
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item dashboard-li"><a href="javascript:;" class="prev-page">
                                    <i class="bx bx-home-alt"></i>Dashboard</a>
                                    
								</li>
								<li class="breadcrumb-item dashboard-li"><a href="{{ url('index') }}" class="prev-page">
                                    <i class="bx bx-store-alt"></i>Customer</a>
                                    
								</li>
								<li class="breadcrumb-item  active">
                                    <i class="fadeIn animated bx bx-list-plus"></i>
                                    Edit Customer
								</li>

							</ol>
						</nav>
					</div>
					<div class="ms-auto">
                        
                    </div>
				</div>
				<!--end breadcrumb-->
				
				<div class="card">
					<div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div>
                                <i class="bx bx-store-alt me-1 font-22 text-green"></i>
                            </div>
                            <h5 class="mb-0 ">Edit Customer</h5>
                        </div>
                        <hr/>
						<form class="row pt-3" action="" method="POST">
							@csrf
                            @method('PUT')
							<div class="col-md-12">
                                <div class="d-flex justify-content-between">
                                    <div class="col-md-6 me-2">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <div class="input-group">
                                            
                                            <input type="text" autofocus="autofocus" name="firstName" class="form-control  " id="firstName" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <div class="input-group">
                                            
                                            <input type="text" autofocus="autofocus" name="lastName" class="form-control  " id="lastName" value="">
                                        </div>
                                    </div>
                                </div>
								<label for="email" class="form-label">Email</label>
								<div class="input-group">
									
									<input type="email" autofocus="autofocus" name="email" class="form-control  " id="email" value="">
								</div>
								<div class="d-flex justify-content-between">
									<div class="col-md-6 me-2">
										<label for="addLine1" class="form-label">Address Line1</label>
										<div class="input-group">
											
											<input type="text" autofocus="autofocus" name="addLine1" class="form-control " id="addLine1" value="">
										</div>
									</div>
									<div class="col-md-6">
										<label for="addLine2" class="form-label">Address Line2</label>
										<div class="input-group">
											
											<input type="text" autofocus="autofocus" name="addLine2" class="form-control  " id="addLine2" value="" >
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="col-md-4 me-2">
										<label for="city" class="form-label">City</label>
										<input type="text" autofocus="autofocus" name="city" class="form-control  " id="city" value="" >
									</div>

									<div class="col-md-4 me-2" >
										<label for="state" class="form-label">State</label>
										<input type="text" autofocus="autofocus" name="state" class="form-control  " id="state" value="" >
									</div>

									<div class="col-md-4">
										<label for="country" class="form-label">Country</label>
										<input type="text" autofocus="autofocus" name="country" class="form-control  " id="country" value="" >
									</div>
								</div>
							</div>
							<div class="col-12 mt-3">
								<button type="submit" class=" px-5  btn btn-primary custom-btn"><a href=""></a>Edit Product</button>
								<button  type="reset" class=" px-5 btn btn-primary custom-btn" value="Reset">Reset</button>
							</div>
						</form>
						
						
					</div>
					
				</div>
				</div>
</div>

@extends('admin.layout.footer')
