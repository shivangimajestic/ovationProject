@include('admin.layout.header')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<link rel="stylesheet" href="{{asset('css/product/index.css')}}">
<!--start page wrapper -->
    <div class="page-wrapper">
		<div class="page-content">
			<div class="content-page">
				<div class="container-fluid">
					<div class="row" id="printBill">
						<div class="col-lg-12">
							<div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
								<div>
									<h4 class="mb-3">Order No:-{{$orders->orderNumber}}</h4>
								</div>
								<div>
								<a href="{{url('admin/orders/index')}}"
									class="btn btn-primary add-list">Order List</a>
								<!-- <button class="btn btn-primary add-list" id="print">Print</button> -->
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="card">
                                <div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<h4 class="mb-4">Customer Details</h4>
											<div class="form-group ">
												<div class="row">
													<label class="col-sm-2">Customer Name: </label>
													<div class="col-sm-8">
												    </div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<label class="col-sm-2">Shipping Address: </label>
													<div class="col-sm-8">

													</div>
												</div>
											</div>
											<h4 class="mb-4 mt-3">Order Details</h4>
											<div class="form-group ">
												<div class="row">
													<label class="col-sm-2">Store Name: </label>
													<div class="col-sm-8">
														Al Zouq Al Rafie Restaurant
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<label class="col-sm-2">Store Address: </label>
													<div class="col-sm-8">
														Mamsha All Showqiyyah - Makkah
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<label class="col-sm-2">Order Date: </label>
													<div class="col-sm-8">
                                                    {{\Carbon\Carbon::parse($orders->orderDate)->format('d/m/Y') }}
													</div>
												</div>
											</div>
											<div class="form-group ">
												<div class="row">
													<label class="col-sm-2">Order Total: </label>
													<div class="col-sm-8">
                                                    $ {{$orders->totalAmount}}
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<label class="col-sm-2">Payment Status: </label>
													<div class="col-sm-8">
                                                    {{$orders->paymentMode}}
													</div>

												</div>
											</div>
											<div>
												<hr>
											</div>
										</div>
										<table class="table">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Product Name</th>
													<th scope="col">Quantity</th>
													<th scope="col">Selling Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Maghrabi Special Non Spicy</td>
													<td>2</td>
													<td>$24.0</td>
												</tr>
											</tbody>
										</table>
										<div class="col-md-12">
											<hr>
										</div>
										<div class="col-md-4 offset-md-7">
											<div class="form-group ">
												<div class="row">
													<label class="col-sm-4">Sub Total: </label>
													<div class="col-sm-8">
                                                    $ {{$orders->totalAmount}}
													</div>

												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<label class="col-sm-4">Total: </label>
													<div class="col-sm-8">
                                                    $ {{$orders->totalAmount}}
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- Page end  -->
					</div>

				</div>
			</div>
			<!-- Wrapper End-->
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

	// window.onload = function () {
    // document.getElementById("print")
    //     .addEventListener("click", () => {
    //         const invoice = this.document.getElementById("printBill");
    //         console.log(invoice);
    //         console.log(window);
    //         var opt = {
    //             margin: 1,
    //             filename: 'invoice.pdf',
    //             image: { type: 'jpeg', quality: 0.98 },
    //             html2canvas: { scale: 2 },
    //             jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    //         };
    //         html2pdf().from(invoice).set(opt).save();
    //     })
	// }
	</script>
	
	<!--app JS-->
	<!-- <script src="{{asset('js/app.js')}}"></script> -->
@include('admin.layout.footer')
