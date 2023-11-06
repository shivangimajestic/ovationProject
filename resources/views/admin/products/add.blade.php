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
									<a href="{{ url('index') }}" class="prev-page" > 
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
						<form class="row pt-3" action="{{route('add.product')}}" method="POST">
							@csrf
							<div class="col-md-12">
								<label for="prdt_name" class="form-label">Product Name*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="text" autofocus="autofocus" name="prdt_name" class="form-control  border-start-0" id="prdt_name" placeholder="Enter Product Name" required>
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