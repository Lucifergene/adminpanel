<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>List of Deal</title>

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
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_layouts.js"></script>
	<!-- /theme JS files -->
	<script src="../../../../global_assets/js/demo_pages/datatables_sorting.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	
    <script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
	
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_select2.js"></script>
</head>

<body>



	
<?php
include_once"include/top.php";
?>

	<!-- Page content -->
	<div class="page-content">

	<?php
include_once"include/sidebar.php";
?>



		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">List of Deal</span></h4>
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

				<!-- Horizontal form options -->
				<div class="row">
					<div class="col-md-12">
                    
						<!-- Static mode -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">List City</h5>
								
							</div>

								<table class="table datatable-sorting">
						<thead>
							<tr>
								<th>ID</th>
								<th>Deal Name</th>
								<th>URL</th>
								<th>Status</th>
								<th>No of product</th>
								<th>Add New Product</th>
								<th class="text-center">Actions</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>10</td>
								<td>Jharkhand</td>
								
								<td><a href="#"><span class="badge badge-success">India</span></a></td>
								<td class="text-center">
									<div class="form-check form-check-switchery">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input-switchery" checked data-fouc>
										Checked switch
									</label>
								</div>
								</td>
								<td><a href="#"><span class="badge badge-success">15</span></a></td>
								<td><button type="button" class="btn bg-primary" data-toggle="modal" data-target="#modal_theme_primary">Launch </button></td>
									
								<td>
									<button type="button"  class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-bin"></i></button>
		                		<button type="button"  class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-pencil7"></i></button>
								</td>
								
							</tr>
							<tr>
								<td>10</td>
								<td>Jharkhand</td>
								
								<td><a href="#"><span class="badge badge-success">India</span></a></td>
								<td class="text-center">
									<div class="form-check form-check-switchery">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input-switchery" checked data-fouc>
										Checked switch
									</label>
								</div>
								</td>
								<td><a href="#"><span class="badge badge-success">15</span></a></td>
								<td><button type="button" class="btn bg-primary" data-toggle="modal" data-target="#modal_theme_primary">Launch </button></td>
									
								<td>
									<button type="button"  class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-bin"></i></button>
		                		<button type="button"  class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-pencil7"></i></button>
								</td>
								
							</tr>
						</tbody>
					</table>
						</div>
						<!-- /static mode -->

					
					
                      </div>
					
				</div>
				<!-- /vertical form options -->


				
			</div>
			<!-- /content area -->
            <div id="modal_theme_primary" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<h6 class="modal-title">Primary header</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="row">
								<div class="col-md-12">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Multiple select</h5>
								<div class="header-elements">
									
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group">
									<label>Multiple select</label>
									<select multiple="multiple" class="form-control select" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ" selected>Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA" selected>Iowa</option>
											<option value="KS" selected>Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								
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
<?php
		include_once "include/footer.php";
		?>

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
