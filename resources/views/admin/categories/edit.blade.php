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
                                    <i class="bx bx-store-alt"></i>Category</a>
                                    
								</li>
								<li class="breadcrumb-item  active">
                                    <i class="fadeIn animated bx bx-list-plus"></i>
                                    Edit Category
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
                            <h5 class="mb-0 ">Edit Category</h5>
                        </div>
                        <hr/>
						<form class="row pt-3" action="{{url('admin/categories/update/'.$categories->id)}}" method="POST">
							@csrf
                            @method('PUT')
							<div class="col-md-12">
								<label for="categoryImage" class="form-label">Category Image*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="text" autofocus="autofocus" src="categoryImage" name="categoryImage" value="{{$categories->categoryImage}}" class="form-control  border-start-0" id="categoryImage" required>
								</div>
								<label for="categoryName" class="form-label">Category Name*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="text" autofocus="autofocus" name="categoryName" value="{{$categories->categoryName}}" class="form-control  border-start-0" id="categoryName" required>
								</div>
								<label for="categoryDetails" class="form-label">Category Details*</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent">
										<i class="bx bx-store-alt"></i>
									</span>
									<input type="text" autofocus="autofocus" name="categoryDetails" value="{{$categories->categoryDetails}}" class="form-control  border-start-0" id="categoryDetails" required>
								</div>
							</div>
							<div class="col-12 mt-3">
								<button type="submit" class=" px-5  btn btn-primary custom-btn"><a href="{{ url('admin/categories/index') }}"></a>Edit Category</button>
								<button  type="reset" class=" px-5 btn btn-primary custom-btn" value="Reset">Reset</button>
							</div>
						</form>
						
						
					</div>
					
				</div>
				</div>
</div>

@extends('admin.layout.footer')
