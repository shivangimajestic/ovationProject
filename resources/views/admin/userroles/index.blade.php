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
			width: 25%;
			padding: 5px;
			border : 1px solid black;
			
		}
		.update-button{
			background-color:#0da39a;
			color:white;
			margin:10px;
			height: 50px;
    		width: 200px;
			border-radius: 11px;
    		font-size: 19px;
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
								<li class="breadcrumb-item active" aria-current="page">User Roles</li>
							</ol>

						</nav>
					</div>
					<div class="ms-auto">
						
					</div>                                       
				</div>
				<div>ALL ROLES & CAPABILITIES</div>
				<!--end breadcrumb-->
				<hr/>
    
				<div class="card"> 
					<div class="card-body">            
						<div class="table-responsive">
							
							<select name="User-Roles" id="User-Roles" style ="width: %; height:30px; margin:10px;">
								<option value="">Select User Role</option>
								<option value="Admin">Admin</option>
								<option value="Sub-Admin">Sub-Admin</option>
							</select>

							<div class="row">
							<div class="column" style = "width: 100%">							
							<table style="h:100%">
								
								<thead>
									<tr>
										<th scope="col">Store Management</th> 
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id="Store Manage"  value="Store Manage">
  											<label for="Store Manage"> Store Manage </label>
										</td>
										<td><input type="checkbox" id="Store Disable"  value="Store Disable">
  											<label for="Store Disable"> Store Disable </label></td>
										<td>
											<input type="checkbox" id="Store Inventory"  value="Store Inventory">
  											<label for="Store Inventory"> Store Inventory </label>
										</td>
										<td>
											<input type="checkbox" id=" Store Empty Inventory"  value=" Store Empty Inventory">
  											<label for=" Store Empty Inventory"> Store Empty Inventory</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Store Add"  value="Store Add">
  											<label for="Store Add"> Store Add </label>
										</td>
										<td><input type="checkbox" id="Manage Users"  value="Manage Users">
  											<label for="Manage Users"> Manage Users </label></td>
										<td>
											<input type="checkbox" id="Customer Screen Slider"  value="Customer Screen Slider">
  											<label for="Customer Screen Slider"> Customer Screen Slider </label>
										</td>
										<td>
											<input type="checkbox" id=" Store Bills"  value=" Store Bills">
  											<label for=" Store Bills"> Store Bills</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Store Edit"  value="Store Edit">
  											<label for="Store Edit"> Store Edit </label>
										</td>
										<td><input type="checkbox" id="Store Customer"  value="Store Customer">
  											<label for="Store Customer"> Store Customer </label></td>
										<td>
											<input type="checkbox" id="Store Reports"  value="Store Reports">
  											<label for="Store Reports"> Store Reports </label>
										</td>
										<td>
											<input type="checkbox" id="Store Vendors"  value=" Store Vendors">
  											<label for=" Store Vendors"> Store Vendors</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Store Delete"  value="Store Delete">
  											<label for="Store Delete"> Store Delete </label>
										</td>
										<td><input type="checkbox" id="Configure Email"  value="Configure Email">
  											<label for="Configure Email"> Configure Email </label></td>
										<td>
											<input type="checkbox" id="Store Zero Inventory"  value="Store Zero Inventory">
  											<label for="Store Zero Inventory"> Store Zero Inventory </label>
										</td>
										<td>
											<input type="checkbox" id=" Store Invoices"  value=" Store Invoices">
  											<label for=" Store Invoices"> Store Invoices</label>
										</td>
									</tr>
								</tbody>
							</table></div></div>
							
							
							<div class="row">
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">Category Management</th> 
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id="Category Manage"  value="Category Manage">
  											<label for="Category Manage"> Category Manage </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Category Add"  value="Category Add">
  											<label for="Category Add"> Category Add</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Category Edit"  value="Category Edit">
  											<label for="Category Edit"> Category Edit </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Category Delete"  value="Category Delete">
  											<label for="Category Delete"> Category Delete </label>
										</td>
									</tr>
								</tbody>
							</table>
							</div>
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">Global Products</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="checkbox" id=" Global Product Manage"  value=" Global Product Manage">
  											<label for=" Global Product Manage"> Global Product Manage </label>
										</td>
									</tr>
									<tr>
										<td><input type="checkbox" id="Global Products Import"  value="Global Products Import">
  											<label for="Global Products Import"> Global Products Import</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" id="Global Products Edit "  value="Global Products Edit ">
  											<label for="Global Products Edit "> Global Products Edit </label></td>
									</tr>
									<tr>
										<td><input type="checkbox" id="Global Products Delete "  value="Global Products Delete ">
  											<label for="Global Products Delete "> Global Products Delete </label></td>
								</tbody>
							</table>
							</div>
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">Brand Management</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="checkbox" id=" Global Product Manage"  value=" Global Product Manage">
  											<label for=" Global Product Manage"> Global Product Manage </label></td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Brand Add"  value="Brand Add">
  											<label for="Brand Add"> Brand Add </label>
										</td>
									</tr>
									<tr>
										<td>	
											<input type="checkbox" id="Brand Edit"  value="Brand Edit">
  											<label for="Brand Edit"> Brand Edit </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Brand Delete"  value="Brand Delete">
  											<label for="Brand Delete"> Brand Delete </label>
										</td>
									</tr>
								</tbody>
							</table>
							</div>
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">Vat Management</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id="Vat Manage"  value="Vat Manage">
  											<label for="Vat Manage"> Vat Manage</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Vat Add"  value="Vat Add">
  											<label for="Vat Add"> Vat Add</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Vat Edit"  value="Vat Edit">
  											<label for="Vat Edit"> Vat Edit</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Vat Delete"  value="Vat Delete">
  											<label for=" Vat Delete"> Vat Delete</label>
										</td>
									</tr>
								</tbody>
							</table>
							</div>
							</div>
							<div class="row">
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">Customer Management</th> 
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id="Customer Manage"  value="Customer Manage">
  											<label for="Customer Manage"> Customer Manage </label>
										</td>
										</tr>
									<tr>
										<td>
											<input type="checkbox" id="Customer View"  value="Customer View">
  											<label for="Customer View"> Customer View</label>
										</td>
									</tr>
									<tr>
									<td>
											<input type="checkbox" id="Customer Add"  value="Customer Add">
  											<label for="Customer Add"> Category Add</label>
										</td>
									</tr>
									<tr>
									<td>
											<input type="checkbox" id="Customer Edit"  value="Customer Edit">
  											<label for="Customer Edit"> Customer Edit </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Customer Delete"  value="Customer Delete">
  											<label for="Customer Delete"> Customer Delete </label>
										</td>

									</tr>
								</tbody>
							</table>
							</div>
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">Sub Admin Management</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id=" Sub Admin Manage"  value=" Sub Admin Manage">
  											<label for=" Sub Admin Manage">Sub Admin Manage</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Sub Admin Import"  value="Sub Admin Import">
  											<label for="Sub Admin Import"> Sub Admin Import</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Sub Admin Edit "  value="Sub Admin Edit ">
  											<label for="Sub Admin Edit "> Sub Admin Edit</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Sub Admin Delete "  value="Sub Admin Delete ">
  											<label for="Sub Admin Delete "> Sub Admin Delete</label>
										</td>
									</tr>
								</tbody>
							</table>
							</div>
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">Store Type Management</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id="Store Type Manage"  value="Store Type Manage">
  											<label for="Store Type Manage"> Store Type Manage</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Store Type Add"  value="Store Type Add">
  											<label for="Store Type Add"> Store Type Add </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Store Type Edit"  value="Store Type Edit">
  											<label for="Store Type Edit"> Store TypeEdit </label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Store Type Delete"  value="Store Type Delete">
  											<label for="Store Type Delete"> Store Type Delete </label>
										</td>
									</tr>
								</tbody>
							</table>
							</div>
							<div class="column">
							<table style="h:100%">
								<thead>
									<tr>
										<th scope="col">Customer Slider Management</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id="Customer Slider Manage"  value="Customer Slider Manage">
  											<label for="Customer Slider Manage"> Customer Slider Manage</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Customer Slider Add"  value="Customer Slider Add">
  											<label for="Customer Slider Add"> Customer Slider Add</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Customer Slider Edit"  value="Customer Slider Edit">
  											<label for="Customer Slider Edit"> Customer Slider Edit</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" id="Customer Slider Delete"  value="Customer Slider Delete">
  											<label for=" Customer Slider Delete"> Customer Slider Delete</label>
										</td>
									</tr>
								</tbody>
							</table>
							</div>
							</div>
							<div class="row">
								<div class="column" style="width:50%">
								<table style="width:100%">
								<thead>
									<tr>
										<th scope="col">Report Management</th> 
										<!-- <th scope="col"></th> -->
										
									</tr>
								</thead>
								<tbody>					
								<tr>
									<td>
										<input type="checkbox" id="Reports Manage"  value="Reports Manage">
  										<label for="Reports Manage"> Reports Manage </label>
									</td>
									<td>
										<input type="checkbox" id=" Inventory Reports"  value="Inventory Reports">
  										<label for=" Inventory Reports"> Inventory Reports </label></td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="Sales Reports"  value="Sales Reports">
  										<label for="Sales Reports"> Sales Reports </label>
									</td>
									<td>
										<input type="checkbox" id=" Purchase Reports"  value="Purchase Reports">
  										<label for="Purchase Reports"> Purchase Reports </label>
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="VAT Reports"  value="VAT Reports">
  										<label for="VAT Reports"> VAT Reports </label>
									</td>
									<td>
										<input type="checkbox" id=" Media Reports"  value="Media Reports">
  										<label for=" Media Reports"> Media Reports </label></td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="Refund Reports"  value=" Refund Reports">
  										<label for="Refund Reports"> Refund Reports </label>
									</td>
									<td>
										<input type="checkbox" id=" Cashier Report"  value="Cashier Report">
  										<label for=" Cashier Report"> Cashier Reports </label></td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="column">
							<table style="width:100%">
								<thead>
									<tr>
										<th scope="col">Order/Bills Management</th>
									</tr>
								</thead>
								<tbody>					
								<tr>
									<td>
										<input type="checkbox" id="Order/Bills Manage"  value="Order/Bills Manage">
  										<label for="Order/Bills Manage"> Order/Bills Manage</label>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="column">
							<table style="width:100%">
								<thead>
									<tr>
										<th scope="col">Subscription Plan Management</th>
									</tr>
								</thead>
								<tbody>					
								<tr>
									<td>
										<input type="checkbox" id="Subscription Plan Manage"  value="Subscription Plan Manage">
  										<label for="Subscription Plan Manage"> Subscription Plan Manage</label>
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id=" Subscription Plan Add"  value=" Subscription Plan Add">
  										<label for=" Subscription Plan Add"> Subscription Plan Add</label>
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="Subscription Plan Edit"  value="Subscription Plan Edit">
  										<label for="Subscription Plan Edit"> Subscription Plan Edit</label>
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="Subscription Plan Delete"  value="Subscription Plan Delete">
  										<label for="Subscription Plan Delete"> Subscription Plan Delete</label>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							</div>
							<div class="row">
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
							</div>
							<button class="update-button">Update Permissions </button>
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