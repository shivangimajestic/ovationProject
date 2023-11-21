@include('admin.layout.header')
<!-- <style>
	.page-link{
    color: #0da39a;
}
</style> -->

<link rel="stylesheet" href="{{asset('css/product/index.css')}}">
<!--start page wrapper -->
<div class="page-wrapper">

	<div class="page-content">
                

			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<!-- <div class="breadcrumb-title pe-3">Tables</div> -->
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;" class="prev-page"><i class="bx bx-home-alt"></i>Dashboard</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Category List</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div>
							<button type="button" class="btn btn-primary custom-btn">
                            <a href="{{url('admin/categories/add')}}" style="color:white;">Add Category</a></button>
						</div>
						<div></div>
					</div>
				</div>
				<!--end breadcrumb-->
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Category Image</th>
										<th>Category Name</th>
										<th>Category Details</th>
                                        <th style="width:225px;">Action</th>
										
									</tr>
								</thead>
								<tbody>
                                    @foreach($categories as $item)
                                    <tr>
                                        <td><img src="{{$item->categoryImage}}" alt="Category Image"style="border-radius: 5px;"></td>
                                        <td>{{$item->categoryName}}</td>
                                        <td>{{$item->categoryDetails}}</td>
                                        <td>
                                            <button class="btn btn-primary custom-btn"><a href="{{url('admin/categories/edit/'.$item->id)}}">Edit</a></button>
                                            <button class="btn btn-primary custom-btn"><a href="{{url('admin/categories/delete/'.$item->id)}}">
													 Delete</a></button>
                                        </td>
                                    </tr>
                                    @endforeach
									
								</tbody>
								
							</table>
						</div>
					</div>
				</div>

	</div>


			</div>

</div>
		
        <!-- Bootstrap JS -->
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	
	<!--app JS-->
	<!-- <script src="{{asset('js/app.js')}}"></script> -->
@include('admin.layout.footer')