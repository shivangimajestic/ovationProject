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

								<li class="breadcrumb-item dashboard-li"><a href="{{ url('admin/customer/index') }}" class="prev-page">

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

						<form class="row pt-3" action="{{url('admin/customer/update/'.$customer->id)}}" method="POST">
							@csrf
                            @method('PUT')
							<div class="col-md-12">
                            <div class="d-flex gap-1">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name*</label>
                                        <div class="input-group">
                                            
                                            <input type="text" autofocus="autofocus" name="firstName" value="{{$customer->firstName}}"class="form-control  " id="firstName" placeholder="Enter First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name*</label>
                                        <div class="input-group">
                                            
                                            <input type="text" autofocus="autofocus" name="lastName" value="{{$customer->lastName}}" class="form-control  " id="lastName" placeholder="Enter Last Name" required>
                                        </div>
                                    </div>
                                </div>
								<label for="email" class="form-label">Email*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="email" autofocus="autofocus" name="email" value="{{$customer->email}}" class="form-control  border-start-0" id="email" required>
								</div>
								<label for="addLine1" class="form-label">Address Line1*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="text" autofocus="autofocus" name="addLine1" value="{{$customer->addLine1}}" class="form-control  border-start-0" id="addLine1" required>
								</div>
								<label for="addLine2" class="form-label">Address Line2*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="text" autofocus="autofocus" name="addLine2" value="{{$customer->addLine2}}" class="form-control  border-start-0" id="addLine2" required>
								</div>
								<label for="city" class="form-label">City*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="text" autofocus="autofocus" name="city" value="{{$customer->city}}" class="form-control  border-start-0" id="city" required>
								</div>
								<label for="state" class="form-label">State*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="text" autofocus="autofocus" name="state" value="{{$customer->state}}" class="form-control  border-start-0" id="state" required>
								</div>
								<label for="country" class="form-label">Country*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="text" autofocus="autofocus" name="country" value="{{$customer->country}}" class="form-control  border-start-0" id="country" required>
								</div>
							</div>
							<div class="col-12 mt-3">
								<button type="submit" class=" px-5  btn btn-primary custom-btn"><a href="{{ url('admin/customer/index') }}"></a>Edit Customer</button>

								<button  type="reset" class=" px-5 btn btn-primary custom-btn" value="Reset">Reset</button>
							</div>
						</form>
						
						
					</div>
					
				</div>
				</div>
</div>

@extends('admin.layout.footer')
