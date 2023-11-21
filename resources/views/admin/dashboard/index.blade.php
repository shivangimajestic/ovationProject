@include('admin.layout.header')
<!-- <style>
	.page-link{
    color: #0da39a;
}
</style> -->
<style>
	table {
		border-collapse: collapse;
		/* border : 1px solid black;
		margin:15px; */
	}
	th,td {
		/* width:25%; */
		/* border: 1px solid #cecfd5; */
		padding: 10px 15px;
		width: 1%;
		}
		.row {
			margin-left:-5px;
			margin-right:-5px;
			margin:5px;
			
		}
			
		.column {
			float: left;
			width: 50%;
			padding: 5px;
			border : 1px solid black;
			
		}

</style>
<link rel="stylesheet" href="{{asset('css/userroles/index.css')}}">
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
						</ol>
					</nav>
				</div>
				<div class="ms-auto">
				</div>                                       
			</div>
			<!--end breadcrumb-->
			<hr/>
    		<div> 
				<div class="card-body">            
					<div class="table-responsive">
						<div class="row">
							<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="row">
						<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="column">
								<table style="h:100%">
									<tr>
										<td>
											<div class="card">

											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						
							
							<!-- <div class="row">
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">Log Management</th> 
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id="Log View"  value="Log View">
											<label for="Log View"> Log View </label>
										</td>
									</tr>
								</tbody>
							</table>
							</div>
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">App Update Management</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id="Push App Update"  value="Push App Update">
											<label for=" Push App Update"> Push App Update</label>
										</td>
									</tr>
								</tbody>
							</table>
							</div>
							</div> -->
							
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