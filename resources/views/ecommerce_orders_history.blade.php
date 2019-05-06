<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/ecommerce_orders_history.js"></script>
	<!-- /theme JS files -->

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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">ECommerce</span> - Orders History</h4>
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
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="ecommerce_orders_history.html" class="breadcrumb-item">ECommerce</a>
							<span class="breadcrumb-item active">Orders history</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Orders history (static table) -->
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Orders history (static table)</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="table-responsive">
						<table class="table text-nowrap">
							<thead>
								<tr>
									<th colspan="2">Product name</th>
									<th>Size</th>
									<th>Colour</th>
									<th>Article number</th>
									<th>Units</th>
									<th>Price</th>
									<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<td colspan="7" class="font-weight-semibold">New orders</td>
									<td class="text-right">
										<span class="badge bg-secondary badge-pill">24</span>
									</td>
								</tr>

								<tr>
									<td class="pr-0" style="width: 45px;">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Fathom Backpack</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-grey border-grey mr-1"></span>
											Processing
										</div>
									</td>
									<td>34cm x 29cm</td>
									<td>Orange</td>
									<td>
										<a href="#">1237749</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 79.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Mystery Air Long Sleeve T Shirt</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-grey border-grey mr-1"></span>
											Processing
										</div>
									</td>
									<td>L</td>
									<td>Process Red</td>
									<td>
										<a href="#">345634</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 38.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Women’s Prospect Backpack</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-grey border-grey mr-1"></span>
											Processing
										</div>
									</td>
									<td>46cm x 28cm</td>
									<td>Neu Nordic Print</td>
									<td>
										<a href="#">5739584</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 60.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Overlook Short Sleeve T Shirt</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-grey border-grey mr-1"></span>
											Processing
										</div>
									</td>
									<td>M</td>
									<td>Gray Heather</td>
									<td>
										<a href="#">434450</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 35.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr class="table-active">
									<td colspan="7" class="font-weight-semibold">Shipped orders</td>
									<td class="text-right">
										<span class="badge bg-success badge-pill">42</span>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Infinite Ride Liner</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-success border-success mr-1"></span>
											Shipped
										</div>
									</td>
									<td>43</td>
									<td>Black</td>
									<td>
										<a href="#">34739</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 210.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Custom Snowboard</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-success border-success mr-1"></span>
											Shipped
										</div>
									</td>
									<td>151</td>
									<td>Black/Blue</td>
									<td>
										<a href="#">5574832</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 600.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Kids' Day Hiker 20L Backpack</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-success border-success mr-1"></span>
											Shipped
										</div>
									</td>
									<td>24cm x 29cm</td>
									<td>Figaro Stripe</td>
									<td>
										<a href="#">6684902</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 55.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Lunch Sack</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-success border-success mr-1"></span>
											Shipped
										</div>
									</td>
									<td>24cm x 20cm</td>
									<td>Junk Food Print</td>
									<td>
										<a href="#">5574829</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 20.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Cambridge Jacket</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-success border-success mr-1"></span>
											Shipped
										</div>
									</td>
									<td>XL</td>
									<td>Nomad/Railroad</td>
									<td>
										<a href="#">475839</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 175.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Covert Jacket</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-success border-success mr-1"></span>
											Shipped
										</div>
									</td>
									<td>XXL</td>
									<td>Mocha/Glacier Sierra</td>
									<td>
										<a href="#">589439</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 126.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr class="table-active">
									<td colspan="7" class="font-weight-semibold">Cancelled orders</td>
									<td class="text-right">
										<span class="badge bg-danger badge-pill">9</span>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Day Hiker Pinnacle 31L Backpack</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-danger border-danger mr-1"></span>
											Cancelled
										</div>
									</td>
									<td>42cm x 26.5cm</td>
									<td>Blotto Ripstop</td>
									<td>
										<a href="#">5849305</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 130.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Kids' Gromlet Backpack</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-danger border-danger mr-1"></span>
											Cancelled
										</div>
									</td>
									<td>22cm x 20cm</td>
									<td>Slime Camo Print</td>
									<td>
										<a href="#">4438495</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 35.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Tinder Backpack</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-danger border-danger mr-1"></span>
											Cancelled
										</div>
									</td>
									<td>42cm x 26cm</td>
									<td>Dark Tide Twill</td>
									<td>
										<a href="#">4759383</a>
									</td>
									<td>2</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 180.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td class="pr-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
									</td>
									<td>
										<a href="#" class="font-weight-semibold">Almighty Snowboard Boot</a>
										<div class="text-muted font-size-sm">
											<span class="badge badge-mark bg-danger border-danger mr-1"></span>
											Cancelled
										</div>
									</td>
									<td>45</td>
									<td>Multiweave</td>
									<td>
										<a href="#">34432</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="mb-0 font-weight-semibold">&euro; 370.00</h6>
									</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /orders history (static table) -->


				<!-- Orders history (datatable) -->
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Orders history (Datatable)</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<table class="table table-orders-history text-nowrap">
						<thead>
							<tr>
								<th>Status</th>
								<th>Product name</th>
								<th>Size</th>
								<th>Colour</th>
								<th>Article number</th>
								<th>Units</th>
								<th>Price</th>
								<th class="text-center"><i class="icon-arrow-down12"></i></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1. New orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-grey border-grey mr-1"></span>
												Processing
											</div>
										</div>
									</div>
								</td>
								<td>34cm x 29cm</td>
								<td>Orange</td>
								<td>
									<a href="#">1237749</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>1. New orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Mystery Air Long Sleeve T Shirt</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-grey border-grey mr-1"></span>
												Processing
											</div>
										</div>
									</div>
								</td>
								<td>L</td>
								<td>Process Red</td>
								<td>
									<a href="#">345634</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 38.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>1. New orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>
										
										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Women’s Prospect Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-grey border-grey mr-1"></span>
												Processing
											</div>
										</div>
									</div>
								</td>
								<td>46cm x 28cm</td>
								<td>Neu Nordic Print</td>
								<td>
									<a href="#">5739584</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 60.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>1. New orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Overlook Short Sleeve T Shirt</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-grey border-grey mr-1"></span>
												Processing
											</div>
										</div>
									</div>
								</td>
								<td>M</td>
								<td>Gray Heather</td>
								<td>
									<a href="#">434450</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 35.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>2. Shipped orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Infinite Ride Liner</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-success border-success mr-1"></span>
												Shipped
											</div>
										</div>
									</div>
								</td>
								<td>43</td>
								<td>Black</td>
								<td>
									<a href="#">34739</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 210.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>2. Shipped orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Custom Snowboard</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-success border-success mr-1"></span>
												Shipped
											</div>
										</div>
									</div>
								</td>
								<td>151</td>
								<td>Black/Blue</td>
								<td>
									<a href="#">5574832</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 600.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>2. Shipped orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Kids' Day Hiker 20L Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-success border-success mr-1"></span>
												Shipped
											</div>
										</div>
									</div>
								</td>
								<td>24cm x 29cm</td>
								<td>Figaro Stripe</td>
								<td>
									<a href="#">6684902</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 55.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>2. Shipped orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Lunch Sack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-success border-success mr-1"></span>
												Shipped
											</div>
										</div>
									</div>
								</td>
								<td>24cm x 20cm</td>
								<td>Junk Food Print</td>
								<td>
									<a href="#">5574829</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 20.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>2. Shipped orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Cambridge Jacket</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-success border-success mr-1"></span>
												Shipped
											</div>
										</div>
									</div>
								</td>
								<td>XL</td>
								<td>Nomad/Railroad</td>
								<td>
									<a href="#">475839</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 175.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>2. Shipped orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Covert Jacket</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-success border-success mr-1"></span>
												Shipped
											</div>
										</div>
									</div>
								</td>
								<td>XXL</td>
								<td>Mocha/Glacier Sierra</td>
								<td>
									<a href="#">589439</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 126.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>3. Cancelled orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Day Hiker Pinnacle 31L Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-danger border-danger mr-1"></span>
												Cancelled
											</div>
										</div>
									</div>
								</td>
								<td>42cm x 26.5cm</td>
								<td>Blotto Ripstop</td>
								<td>
									<a href="#">5849305</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 130.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>3. Cancelled orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Kids' Gromlet Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-danger border-danger mr-1"></span>
												Cancelled
											</div>
										</div>
									</div>
								</td>
								<td>22cm x 20cm</td>
								<td>Slime Camo Print</td>
								<td>
									<a href="#">4438495</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 35.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>3. Cancelled orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Tinder Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-danger border-danger mr-1"></span>
												Cancelled
											</div>
										</div>
									</div>
								</td>
								<td>42cm x 26cm</td>
								<td>Dark Tide Twill</td>
								<td>
									<a href="#">4759383</a>
								</td>
								<td>2</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 180.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>3. Cancelled orders</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Almighty Snowboard Boot</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-danger border-danger mr-1"></span>
												Cancelled
											</div>
										</div>
									</div>
								</td>
								<td>45</td>
								<td>Multiweave</td>
								<td>
									<a href="#">34432</a>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 370.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
												<a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /orders history (datatable) -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
