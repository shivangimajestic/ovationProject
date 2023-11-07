@include('admin.layout.header')
<head>
<link rel="stylesheet" href="{{asset('css/product/add.css')}}">

    
</head>
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item dashboard-li">
                                    <a href="" class="prev-page">
                                        <i class="bx bx-home-alt"></i>
                                        Dashboard
                                    </a>
								</li>

								<li class="breadcrumb-item dashboard-li" >
									<a href="" class="prev-page" > 
										<i class='fadeIn animated bi bi-boxes'></i>
                                    Product</a>
								</li>

								<li class="breadcrumb-item  active">
                                    <i class="fadeIn animated bx bx-list-plus"></i>
                                    Add Product
								</li>

								

							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						
					</div>
				</div>
				<!--end breadcrumb-->
				
				<div class="card border-top  border-4 border-secondary">
					<div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div>
                                <i class="bi bi-boxes me-1 font-22 text-green"></i>
                            </div>
                            <h5 class="mb-0 ">Add Product</h5>
                        </div>
                        <hr/>
						<form class="row pt-3" action="" method="POST">
							@csrf
							<div class="col-md-12">
                                <div class="d-flex gap-4">
                                    <div class="col-md-5">
                                        <label for="firstName" class="form-label">First Name*</label>
                                        <div class="input-group">
                                            
                                            <input type="text" autofocus="autofocus" name="firstName" class="form-control  " id="firstName" placeholder="Enter Product Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="firstName" class="form-label">First Name*</label>
                                        <div class="input-group">
                                            
                                            <input type="text" autofocus="autofocus" name="firstName" class="form-control  " id="firstName" placeholder="Enter Product Name" required>
                                        </div>
                                    </div>
                                </div>
								<label for="email" class="form-label">Email</label>
								<div class="input-group">
									
									<input type="email" autofocus="autofocus" name="email" class="form-control  " id="email" placeholder="Enter email address" required>
								</div>
								<label for="addLine1" class="form-label">Address Line1*</label>
								<div class="input-group">
									
									<input type="text" autofocus="autofocus" name="addLine1" class="form-control " id="addLine1" placeholder="Enter address" required>
								</div>
								<label for="addLine2" class="form-label">Address Line2*</label>
								<div class="input-group">
									
									<input type="text" autofocus="autofocus" name="addLine2" class="form-control  " id="addLine2" placeholder="Enter address" >
								</div>
							</div>
                            
							<div class="col-12 mt-3">
								<button type="submit" class="btn btn-primary px-5 custom-btn">Add Product</button>
							</div>
						</form>
						
					</div>
					
				</div>
				</div>
</div>
@include('admin.layout.footer')