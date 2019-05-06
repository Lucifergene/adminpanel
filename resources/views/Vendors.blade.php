<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Vendors</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="../../../../global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	
	<!-- /main navbar -->


	<!-- Page content -->
	 <?php
include_once"include/top.php";
?>

	<!-- Page content -->
	<div class="page-content">

	<?php
include_once"include/sidebar.php";
?>

		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Vendors </span> - Listing all Vendors...</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

			
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Listing all Vendors</h5>
						<div class="header-elements">
							<div class="box-tools pull-right">
            	<td><button type="button" class="btn bg-primary" data-toggle="modal" data-target="#modal_theme_primary">Add New</button></td>
            </div>
	                	</div>
					</div>

					

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Id.</th>
								<th>Name</th>
								<th>GST NO</th>
								<th>PAN NO</th>
								<th>Address 1</th>
								<th>Address 2</th>
								<th>Pincode</th>
								<th>City</th>
								<th>State</th>
								<th>Country</th>
								<th></th>
								<th></th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><a href="#">Vendor Name2</a></td>
								<td>13121123</td>
								<td>132132123131</td>
								<td><span class="badge badge-success">88 A Shyam</span></td>
								<td><span class="badge badge-success">88 A Shyam</span></td>
								<td>458770</td>
								<td>Ranchi</td>
								<td>Jharkhand</td>
								<td>India</td>
								<td><div class="list-icons">
		                		<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-bin"></i></button>
		                		<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-pencil7"></i></button>
		                	</div></td>
							</tr>
							</tbody>
						<tbody>
							<tr>
								<td>2</td>
								<td><a href="#">Vendor Name2</a></td>
								<td>13121123</td>
								<td>132132123131</td>
								<td><span class="badge badge-success">88 A Shyam</span></td>
								<td><span class="badge badge-success">88 A Shyam</span></td>
								<td>458770</td>
								<td>Ranchi</td>
								<td>Jharkhand</td>
								<td>India</td>
								<td><div class="list-icons">
		                		<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-bin"></i></button>
		                		<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-pencil7"></i></button>
		                	</div></td>
							</tr>
							</tbody>	
					</table>
				</div>
				<!-- /basic datatable -->


				<!-- Pagination types -->
				
			</div>
			
			<div id="modal_theme_primary" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<h6 class="modal-title">Add Vendors</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

									<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<b>Vendor name</b>
									<input type="text" class="form-control typeahead-basic" placeholder="Vendor name">
								</div>

								<div class="mb-4">
									<b>PAN NO</b>
									<input type="text" class="form-control typeahead-bloodhound" placeholder="PAN NO">
								</div>

								<div class="mb-4">
								<b>Address 2</b>	
									<input type="text" class="form-control typeahead-prefetched" placeholder="Address 2">
								</div>

								<div class="mb-3">
									<b>City</b>
									<input type="text" class="form-control typeahead-remote" placeholder="City">
								</div>
								<div class="mb-4">
									<b>Country</b>
									<input type="text" class="form-control typeahead-custom-templates" placeholder="Country">
								</div>
							</div>

							<div class="col-md-6">
								

								<div class="mb-4">
									<b>GST NO</b>
									<input type="text" class="form-control typeahead-multiple-datasets" placeholder="GST NO">
								</div>

								<div class="mb-4">
									<b>Address 1</b>
									<div class="typeahead-scrollable">
										<input type="text" class="form-control typeahead-scrollable-menu" placeholder="Address 1">
									</div>
								</div>
                                <div class="mb-4">
									<b>Pin Code</b>
									<input type="text" class="form-control typeahead-multiple-datasets" placeholder="Pin Code">
								</div>
								<div class="mb-4">
									<b>State</b>
									<input type="text" class="form-control typeahead-multiple-datasets" placeholder="State">
								</div>
								
							</div>
							
						</div>
					</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
			<!-- /footer -->
             <?php
		include_once "include/footer.php";
		?>
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
