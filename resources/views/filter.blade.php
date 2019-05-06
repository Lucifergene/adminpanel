<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Manage City</title>

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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Manage Filter</span>       -Preview</h4>
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
					<div class="col-md-5">

						<!-- Basic layout-->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Add filter</h5>
								
							</div>

							<div class="card-body">
								<form action="#">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Filter Name:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Your City">
										</div>
									</div>


									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Filter Code:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Your City"style="width:150px;">
										</div>
									</div>

                                  <div class="form-group row">
										<label class="col-lg-3 col-form-label">Filter Sort:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Your City"style="width:150px;">
										</div>
									</div>
									
                                  <div class="form-group row">
										<label class="col-lg-3 col-form-label">Display:</label>
										<form action="">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male">Open
                                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male">Close
                                       </form>
									</div>
									


									



									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
						</div>
						<!-- /basic layout -->

					</div>

					<div class="col-md-7">

						<!-- Static mode -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">List of Filter</h5>
								
							</div>

								<table class="table datatable-sorting">
						<thead>
							<tr>
								<th>ID</th>
								<th>Filter Name</th>
								<th>code</th>
								<th>Value (No)</th>
								<th>display</th>
								<th>Action</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><a href="#">Testingddf</a></td>
								<td>Sfs</td>
								<td>3  Add</td>
								<td>Open</td>
								<td class="text-center">
									<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-bin"></i></button>
		                		<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-pencil7"></i></button>
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

<?php
		include_once "include/footer.php";
		?>

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
