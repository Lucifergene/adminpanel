@extends('layouts.app')

@section('content')
{{-- <!DOCTYPE html>
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

</head> --}}
{{-- <body> --}}
<!-- Main navbar -->
<!-- /main navbar -->
<!-- Page content -->
	 
	{{-- @include('inc.top') --}}

<!-- Page content -->
	<div class="page-content">

		{{-- @include('inc.sidebar') --}}
	

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
            	<td>
						<a class="btn" data-toggle="modal" href="#modal_theme_primary" >Launch Modal</a> <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#modal_theme_primary">Add New</button></td>
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
							
								{{-- <td>1</td>
								<td><a href="#">Vendor Name2</a></td>
								<td>13121123</td>
								<td>132132123131</td>
								<td><span class="badge badge-success">88 A Shyam</span></td>
								<td><span class="badge badge-success">88 A Shyam</span></td>
								<td>458770</td>
								<td>Ranchi</td>
								<td>Jharkhand</td>
								<td>India</td> --}}
								@if(count($messages) > 0)
								@foreach ($messages as $message)
								<tr>
									<td>{{$message->id}}</td>
									<td><a href="#">{{$message->vendor_name}}</a></td>
									<td>{{$message->gst_no}}</td>
									<td>{{$message->pan_no}}</td>
									<td><span class="badge badge-success">{{$message->address_1}}</span></td>
									<td><span class="badge badge-success">{{$message->address_2}}</span></td>
									<td>{{$message->pincode}}</td>
									<td>{{$message->city}}</td>
									<td>{{$message->state}}</td>
									<td>{{$message->country}}</td>
									<td><div class="list-icons">
										<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-bin"></i></button>
										<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-pencil7"></i></button>
									</div></td>
								</tr>
								@endforeach
								@endif
								</tbody>

									





								
								

							




















						{{-- <tbody>
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
							</tbody>	 --}}
					</table>
				</div>
				<!-- /basic datatable -->


				<!-- Pagination types -->
				
			</div>
			
			<!--ADD NEW FORM -->
			<div id="modal_theme_primary" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<h6 class="modal-title">Add Vendors</h6>
								{!! Form::open(['url' => 'vendors/submit']) !!}
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

									<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									{{Form::label('vendor_name', 'Vendor name')}}
									{{Form::text('vendor_name', '', ['class' => 'form-control typeahead-basic', 'placeholder' => 'Vendor name'])}}
									{{-- <b>Vendor name</b>
									<input type="text" class="form-control typeahead-basic" placeholder="Vendor name"> --}}
								</div>

								<div class="mb-4">
										{{Form::label('pan_no', 'PAN NO')}}
										{{Form::text('pan_no', '', ['class' => 'form-control typeahead-bloodhound', 'placeholder' => 'PAN NO'])}}
									{{-- <b>PAN NO</b>
									<input type="text" class="form-control typeahead-bloodhound" placeholder="PAN NO"> --}}
								</div>

								<div class="mb-4">
										{{Form::label('address_2', 'Address 2')}}
										{{Form::text('address_2', '', ['class' => 'form-control typeahead-prefetched', 'placeholder' => 'Address 2'])}}
								{{-- <b>Address 2</b>	
									<input type="text" class="form-control typeahead-prefetched" placeholder="Address 2">
								</div> --}}

								<div class="mb-3">
										{{Form::label('city', 'City')}}
										{{Form::text('city', '', ['class' => 'form-control typeahead-remote', 'placeholder' => 'City'])}}
									{{-- <b>City</b>
									<input type="text" class="form-control typeahead-remote" placeholder="City"> --}}
								</div>
								<div class="mb-4">
										{{Form::label('country', 'Country')}}
										{{Form::text('country', '', ['class' => 'form-control typeahead-templates', 'placeholder' => 'Country'])}}
									{{-- <b>Country</b>
									<input type="text" class="form-control typeahead-custom-templates" placeholder="Country"> --}}
								</div>
							</div>

							<div class="col-md-6">
								

								<div class="mb-4">
									{{Form::label('gst_no', 'GST NO')}}
									{{Form::text('gst_no', '', ['class' => 'form-control typeahead-datasets', 'placeholder' => 'GST NO'])}}
									{{-- <b>GST NO</b>
									<input type="text" class="form-control typeahead-multiple-datasets" placeholder="GST NO"> --}}
								</div>

								<div class="mb-4">
									{{Form::label('address_1', 'Address 1')}}
									{{Form::text('address_1', '', ['class' => 'form-control typeahead-scrollable-menu', 'placeholder' => 'Address 1'])}}
									{{-- <b>Address 1</b>
									<div class="typeahead-scrollable">
										<input type="text" class="form-control typeahead-scrollable-menu" placeholder="Address 1"> --}}
									</div>
								</div>
                                <div class="mb-4">
									{{Form::label('pincode', 'Pin Code')}}
									{{Form::text('pincode', '', ['class' => 'form-control typeahead-multiple-datasets', 'placeholder' => 'Pin Code'])}}
									{{-- <b>Pin Code</b>
									<input type="text" class="form-control typeahead-multiple-datasets" placeholder="Pin Code"> --}}
								</div>
								<div class="mb-4">
									{{Form::label('state', 'State')}}
									{{Form::text('state', '', ['class' => 'form-control typeahead-multiple-datasets', 'placeholder' => 'State'])}}
									{{-- <b>State</b>
									<input type="text" class="form-control typeahead-multiple-datasets" placeholder="State"> --}}
								</div>
								
							</div>
							
						</div>
					</div>

							<div class="modal-footer">
								
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								{{Form::submit('Submit', ['class'=> 'btn bg-primary'])}}
								
								{{-- <button type="button" class="btn bg-primary">Save changes</button> --}}
							</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			
				<!-- /footer -->
			{{-- @include('inc.footer') --}}
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

{{-- </body>
</html> --}}
@endsection