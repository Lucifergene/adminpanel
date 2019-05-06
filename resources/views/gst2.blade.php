<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>GST</title>

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
	
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_select2.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">GST </span> - Listing all GST...</h4>
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

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					

					
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Listing all GST</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<td><button type="button" class="btn bg-primary" data-toggle="modal" data-target="#modal_theme_primary">Launch </button></td>
		                		
		                	</div>
	                	</div>
					</div>

					

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Id.</th>
								<th>GST HSN CODE</th>
								<th>Status</th>
								<th>Fields Tax Slab</th>
								<th>Actions</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><a href="#">5121123132</a></td>
								<td>
								<form action="/action_page.php">
                                  <input type="checkbox" name="vehicle1" value="Bike">
                                 </form>
								 </td>
								<td>Tax_slab</td>
								<td>
								<div class="list-icons">
		                		<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-bin"></i></button>
		                		<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-pencil7"></i></button>
		                	</div>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
									<tr>
								<td>2</td>
								<td><a href="#">5121123132</a></td>
								<td>
								<form action="/action_page.php">
                                  <input type="checkbox" name="vehicle1" value="Bike">
                                 </form>
								 </td>
								<td>Tax_slab</td>
								<td>
								<div class="list-icons">
		                		<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-bin"></i></button>
		                		<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-pencil7"></i></button>
		                	</div>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							
							
							
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->


				<!-- Pagination types -->
				
				<!-- /pagination types -->


				<!-- State saving -->
				


				

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div id="modal_theme_primary" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<h6 class="modal-title">GST/HSN</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

								<div class="card-body">
						<div class="row">
						
						<div class="col-md-12">
								
									<b>GST HSN Code</b>
									<input type="text" class="form-control typeahead-basic" placeholder="Vendor name">
								

								
									<b>Status</b>
									
                                     <input type="checkbox" name="vehicle1" value="Bike"> 
                                
								<b>Tax Slab</b>	
									<input type="text" class="form-control typeahead-prefetched" placeholder="Address 2">
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
			
		<?php
		include_once "include/footer.php";
		?>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
