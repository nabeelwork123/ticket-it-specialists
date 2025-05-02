<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Ticketing System</title>


	<?php include 'includes/style.php'; ?>

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<?php include 'includes/header.php'; ?>
		<?php include 'includes/sidebar.php'; ?>
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Tickets Dashboard </h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="/index"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Dashboard
								</li>
								<li class="breadcrumb-item active" aria-current="page">Tickets Dashboard </li>
							</ol>
						</nav>
					</div>
					<!-- <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
					<div class="me-2 mb-2">
						<div class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
								<i class="ti ti-file-export me-1"></i>Export
							</a>
							<ul class="dropdown-menu  dropdown-menu-end p-3">
								<li>
									<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
								</li>
							</ul>
						</div>
					</div>
					<div class="mb-2">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add_leaves" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Leave</a>
					</div>
					<div class="head-icons ms-2">
						<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
							<i class="ti ti-chevrons-up"></i>
						</a>
					</div>
				</div> -->
				</div>
				<!-- /Breadcrumb -->


				<div class="row">
					<div class="col-xl-9 col-lg-12 col-md-12 col-12">

						<div class="row">

							<div class="col-xl-4 col-md-4">
								<div class="card">
									<div class="card-body ">
										<div class="tick-dash-card d-flex align-items-center justify-content-between">
											<div>
												<h3 class="mb-1 fs-24">26 </h3>
												<span class="fs-14 fw-medium ">New Tickets </span>
											</div>
											<div class="tick-dash-icon">
												<img src="assets/img/icons/new-ticket.png" class="img-fluid">
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="col-xl-4 col-md-4">
								<div class="card">
									<div class="card-body ">
										<div class="tick-dash-card d-flex align-items-center justify-content-between">
											<div>
												<h3 class="mb-1 fs-24">13</h3>
												<span class="fs-14 ">Tickets In Progress</span>
											</div>
											<div class="tick-dash-icon">
												<img src="assets/img/icons/ti-progress.png" class="img-fluid">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-md-4">
								<div class="card">
									<div class="card-body">
										<div class="tick-dash-card d-flex align-items-center justify-content-between">
											<div>
												<h3 class="mb-1 fs-24">09</h3>
												<span class="fs-14 ">Resolved Tickets</span>

											</div>

											<div class="tick-dash-icon">
												<img src="assets/img/icons/ti-resolved.png" class="img-fluid">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="tick-dash-card d-flex align-items-center justify-content-between">
											<div>
												<h3 class="mb-1 fs-24">3.67<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
												<span class="fs-14 fw-medium text-body">Avg. 1st Response Time</span>
												<p class="fs-12  mb-0">from last month </p>
												<!-- <p class="fs-12 mb-0">&nbsp; </p> -->
											</div>

											<div class="tick-dash-icon">
												<img src="assets/img/icons/ti-resolve.png" class="img-fluid">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="tick-dash-card d-flex align-items-center justify-content-between">
											<div>
												<h3 class="mb-1 fs-24">3.67<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
												<span class="fs-14 fw-medium text-body">Avg. Resolve Time</span>
												<p class="fs-12  mb-0">from last month </p>
												<!-- <p class="fs-12 mb-0">&nbsp; </p> -->
											</div>

											<div class="tick-dash-icon">
												<img src="assets/img/icons/ti-response.png" class="img-fluid">
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>

					</div>

					<div class="col-xl-3 col-lg-12 px-md-0 col-12">


						<div class="card ">
							<div class="card-body">
								<div class="tick-dash-card d-flex justify-content-between mb-0">
									<div class="w-75">
										<h3 class="mb-1 fs-24">17</h3>
										<span class="fs-14 ">Overdue Tickets</span>
									</div>
									<div class="tick-dash-icon">
										<img src="assets/img/icons/ti-overdue.png" class="img-fluid">
									</div>
								</div>
								<!-- <p class="fs-12 mb-0">&nbsp; </p> -->
								<div class="ov-box">
									<div class="ov-box-inner">
										<span class=" ">24<span class="fs-10">Hrs</span></span>
										<p class="mt-3">7</p>
										<p class="mb-0 mt-3">tickets </p>
									</div>
									<div class="ov-box-inner">
										<span class="">48<span class="fs-10">Hrs</span></span>
										<p class="mt-3">7</p>
										<p class="mb-0 mt-3">tickets </p>
									</div>
									<div class="ov-box-inner" style="border:0;">
										<span class=" ">72<span class="fs-10">Hrs</span></span>
										<p class="mt-3">12</p>
										<p class="mb-0 mt-3">tickets </p>
									</div>
								</div>
							</div>
						</div>

					</div>


				</div>

				<div class="row px-2">
					<div class="card px-0">
						<div class="card-header bg-transparent ">
							<div class="d-flex align-items-center justify-content-between flex-wrap">
								<div class="flex-column">
									<h5 class="mb-1">Your assigned tickets </h5>
									<!-- <p class="text-body fs-12">List of ticket open by Customers</p> -->
								</div>
								<div class="d-flex justify-content-end me-2">
									<a href="javascript:;" data-bs-toggle="offcanvas" data-bs-target="#offcanvas1" class="btn btn-primary btn-sm h-25 me-0">Search by filters</a>


									<div class="dropdown mb-2 d-none">
										<a href="javascript:void(0);"
											class="btn btn-white border btn-sm d-inline-flex align-items-center"
											data-bs-toggle="dropdown">
											<i class="ti ti-calendar me-1"></i>Today
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Week</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body p-0 msh-cardBody">
							<div class="table-responsive table-responsive-lg">
								<table class="table ">
									<thead class="thead-light">
										<tr>

											<th scope="col">Ticket ID</th>
											<th scope="col">Employee Name</th>
											<th scope="col">Ticket Detail</th>
											<th scope="col">Category</th>
											<th scope="col">Status</th>
											<!-- <th scope="col" width="100">Prority</th> -->
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09834</p>
												<span class="badge bg-soft-primary"><span class="clrr mb-0">Urgent</span></span>
											</td>
											<td class="">
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark  mb-0 ">James MIller </p>
														<span class="fs-12 d-block mb-0 fs-12">International Sales
														</span>
														<span class="fs-12 d-block mb-0 fs-12">Vice President</span>
														<p class="mb-0 fs-13">1st Floor / Seat no 22 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Unable to Connect to Office Wi-Fi</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">01-Apr-2025</p>
														<p class="mb-0 fs-12"> 09:15 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">03-Apr-2025 </p>
														<p class="mb-0 fs-12"> 05:00 PM</p>

													</div>
												</div>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Network Issues</p>
												<p class="fs-12 mb-0">Wi-Fi Connectivity</p>

											</td>
											<td>
												<p class="fs-12 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 clrb"></i>Open
												</p>
											</td>

											<td>
												<a href="#" class="btn btn-primary py-1 btn-sm text-white w-100">Pick</a>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block">09835</p>
												<span class="badge bg-soft-primary text-warning">High</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-33.webp" class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark  mb-0 ">Henry Full </p>
														<span class="fs-12  d-block mb-0">Aministration</span>
														<span class="fs-12 d-block mb-0">Manager</span>
														<p class="mb-0 fs-13">3rd Floor / Seat no 18 </p>
													</div>
												</div>
											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Frequent Wi-Fi Disconnection</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">05-Apr-2025 </p>
														<p class="mb-0 fs-12"> 10:45 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">08-Apr-2025 </p>
														<p class="mb-0 fs-12">03:30 PM</p>
													</div>
												</div>
											</td>

											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Network Issues</p>
												<p class="fs-12 mb-0">Wi-Fi Stability</p>

											</td>
											<td>
												<p class="fs-12 d-inline-flex align-items-center mb-1">
													<i class="fa-solid fa-triangle-exclamation clrr me-1 fs-10"></i> Overdue
												</p>
											</td>

											<td>
												<a href="#" class="btn btn-primary py-1 btn-sm text-white w-100">Close</a>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09836</p>
												<span class="badge bg-soft-primary text-success">Low</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-34.webp" class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark  mb-0 ">Dickson Joe</p>
														<span class="fs-12 d-block mb-0">Brand</span>
														<span class="fs-12 d-block mb-0">Content writer</span>
														<p class="mb-0 fs-13">5th Floor / Seat no 05 </p>
													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">LAN Cable Not Detecting Network</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">10-Apr-2025</p>
														<p class="mb-0 fs-12">02:20 PM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">12-Apr-2025 </p>
														<p class="mb-0 fs-12">11:00 AM</p>

													</div>
												</div>
											</td>

											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Network Issues</p>
												<p class="fs-12 mb-0">LAN Connectivity</p>

											</td>
											<td>
												<p class="fs-13 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 clrg"></i>
													Resolved
												</p>
											</td>

											<td>
												<a href="#" class="btn btn-primary py-1 btn-sm text-white w-100">Pick</a>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09837</p>
												<span class="badge bg-soft-primary text-purple"><span class="">Medium</span></span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-35.webp" class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark  mb-0 ">Sarah Thompson</p>
														<span class="fs-12 d-block mb-0">Human Resources</span>
														<span class="fs-12 d-block mb-0">HR Manager</span>
														<p class="mb-0 fs-13">4th Floor / Seat no 18 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">IP Conflict Error</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">14-Apr-2025 </p>
														<p class="mb-0 fs-12"> 08:30 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">18-Apr-2025 </p>
														<p class="mb-0 fs-12"> 04:45 PM</p>

													</div>
												</div>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Network Issues</p>
												<p class="fs-12 mb-0">IP Configuration</p>

											</td>
											<td>
												<p class="fs-13 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 clri"></i>
													Closed
												</p>
											</td>

											<td>
												<a href="#" class="btn btn-primary py-1 btn-sm text-white w-100">Pick</a>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09838</p>
												<span class="badge bg-soft-primary text-success">Low</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-36.webp" class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark  mb-0 ">Emily Rodriguez</p>
														<span class="fs-12 d-block mb-0">Finance</span>
														<span class="fs-12 d-block mb-0">Finance Analyst</span>
														<p class="mb-0 fs-13">6th Floor / Seat no 17 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Network Printer Not Found</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">20-Apr-2025</p>
														<p class="mb-0 fs-12">01:10 PM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">22-Apr-2025 </p>
														<p class="mb-0 fs-12">10:00 AM</p>

													</div>
												</div>
											</td>

											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Hardware Issues</p>
												<p class="fs-12 mb-0">Printer</p>

											</td>
											<td>
												<p class="fs-13 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 clro"></i>Reopened
												</p>
											</td>

											<td>
												<a href="#" class="btn btn-primary py-1 btn-sm text-white w-100">Pick</a>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09839</p>
												<span class="badge bg-soft-primary text-danger">Urgent</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-28.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-18.webp" class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark  mb-0 ">Sophia Patel </p>
														<span class="fs-12 d-block mb-0">Human Resources</span>
														<span class="fs-12 d-block mb-0">Talent Acquisition
															Specialist</span>
														<p class="mb-0 fs-13">2nd Floor / Seat no 35 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Access Denied to Shared Network Drive
												</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">24-Apr-2025 </p>
														<p class="mb-0 fs-12">11:55 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">29-Apr-2025 </p>
														<p class="mb-0 fs-12">06:15 PM</p>

													</div>
												</div>
											</td>

											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Access Issues</p>
												<p class="fs-12 mb-0">Network Drive Permissions</p>

											</td>
											<td>
												<p class="fs-12 d-inline-flex align-items-center mb-1">
													<i class="fa-solid fa-triangle-exclamation clrr me-1 fs-10"></i>Overdue
												</p>
											</td>

											<td>
												<a href="#" class="btn btn-primary py-1 btn-sm text-white w-100">Pick</a>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09840</p>
												<span class="badge bg-soft-primary text-warning">High</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-38.webp" class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark  mb-0 ">Isabella Morris</p>
														<span class="fs-12 d-block mb-0">Operations</span>
														<span class="fs-12 d-block mb-0">Project Coordinator</span>
														<p class="mb-0 fs-13">1st Floor / Seat no 42 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Unable to Ping Server</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">30-Apr-2025</p>
														<p class="mb-0 fs-12"> 09:00 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">02-May-2025</p>
														<p class="mb-0 fs-12">12:00 PM</p>

													</div>
												</div>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Server Issues</p>
												<p class="fs-12 mb-0">Network Reachability</p>

											</td>
											<td>
												<p class="fs-12 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 clry"></i>Not picked
												</p>
											</td>

											<td>
												<a href="#" class="btn btn-primary py-1 btn-sm text-white w-100">Pick</a>
											</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>



				<div class="row mb-4 d-none">
					<div class="col-xl-12 col-md-12">
						<div class="card flex-fill overflow-hidden">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h5 class="">Average tickets summary</h5>
									<div class="input-icon-end position-relative">
										<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy" id="dateRangePicker">
										<span class="input-icon-addon">
											<i class="ti ti-chevron-down"></i>
										</span>
									</div>
									<div class="dropdown mb-2 d-none">
										<a href="javascript:void(0);"
											class="btn btn-white border btn-sm d-inline-flex align-items-center"
											data-bs-toggle="dropdown">
											<i class="ti ti-calendar me-1"></i>Current year
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Last Year</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1 ">Last Year</a>
											</li>

											<!-- <li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Week</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
											</li> -->
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3 ps-0 align-self-start">
										<div class="row">
											<div class="col-lg-12 col-md-6 mb-3">
												<div class="card b-0 shadow-none m-0">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-2"><i
																	class="fa fa-fw fa-square fs-12"
																	style="color: #664dc9;"></i> Avg. Tickets Picked </p>
															<h2 class="fw-500 m-0">1,525</h2>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-6 mb-3">
												<div class="card b-0 shadow-none m-0">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-2"><i
																	class="fa fa-fw fa-square fs-12"
																	style="color: #f26522;"></i> Avg. Tickets Solved</p>
															<h2 class="fw-500 m-0">1,280</h2>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-6">
												<div class="card b-0 shadow-none m-0">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-2">
																<i class="fa fa-fw fa-square fs-12" style="color:#f4d03f;"></i> Avg. Tickets Reopened
															</p>
															<h2 class="fw-500 m-0">200</h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-9 p-0 bs-1" style="position: relative;">
										<!-- <div id="mixed-chart" class="chart-set"></div> -->
										<div id="chart-bar"></div>
									</div>
								</div>
								<div class="row d-none">
									<div class="col-lg-3 ps-0 align-self-start">
										<div class="row">
											<div class="col-lg-12 col-md-6">
												<div class="card b-0 shadow-none">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-10"><i
																	class="fa fa-fw fa-square fs-12"
																	style="color: #C2A1FC;"></i> Avg. Tickets Created </p>
															<h2 class="fw-500 m-0">1,525</h2>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-6">
												<div class="card b-0 shadow-none m-0">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-10"><i
																	class="fa fa-fw fa-square fs-12"
																	style="color: #6963BB;"></i> Avg. Tickets Solved</p>
															<h2 class="fw-500 m-0">1,280</h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-9 p-0 bs-1" style="position: relative;">
										<div id="mixed-chart" class="chart-set"></div>
									</div>
								</div>
								<!-- <div class="est-img">
							 <img src="assets/img/ticketing/chart1.png" class="img-fluid">
							 </div> -->

							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-lg-4 d-none">
						<div class="card flex-fill">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h3 class="card-title">Employees with most tickets</h3>
									<div class="dropdown mb-2">
										<a href="javascript:void(0);"
											class="btn btn-white border btn-sm d-inline-flex align-items-center"
											data-bs-toggle="dropdown">
											<i class="ti ti-calendar me-1"></i>Today
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Week</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body" style="min-height:300px;overflow-y:auto;">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="text-start">
											<tr>
												<th>Employees name</th>
												<th>tickets</th>
												<th>Department</th>
												<!-- <th>Last Reply</th> -->
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-33.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Anthony Lewis</a></p>

														</div>
													</div>
												</td>

												<td>17 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Brand</td>
											</tr>

											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-34.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">James Anderson</a></p>

														</div>
													</div>
												</td>

												<td>14 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Software</td>
											</tr>

											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-35.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Joe Root</a></p>

														</div>
													</div>
												</td>
												<td>12 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Sales</td>
											</tr>

											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-36.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-39.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Jos buttler</a></p>

														</div>
													</div>
												</td>
												<td>11 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Admin</td>
											</tr>

											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-37.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-40.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Ben stokes</a></p>

														</div>
													</div>
												</td>
												<td>11 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Software</td>
											</tr>
											<tr class="">
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-38.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-41.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Eoin Morgan</a></p>

														</div>
													</div>
												</td>
												<td>18 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Brand</td>
											</tr>

										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6">
						<div class="card b-1 overflow-hidden">
							<div class="card-header no-border">
								<h5 class="">Current month's ticket satisfaction</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-6 be-1 bb-1 ">
										<div class="d-flex align-items-center justify-content-between mb-4 px-4 py-3">
											<div class="w-75">
												<p class="text-mute m-0 mb-2">Tickets picked</p>
												<h3 class="mb-0 fs-24 fw-500 l-h-50">180 tickets</h3>
											</div>
											<div class="mt-3 text-end">
												<img src="assets/img/icons/click.png" class="img-fluid">
											</div>
										</div>
									</div>

									<div class="col-6 be-1 bb-1 ">
										<div class="d-flex gap-2 align-items-end justify-content-between bg-light p-2 rounded mb-3 px-4 py-2">
											<div class="w-75">
												<h3 class="mb-0 fs-24 fw-500 l-h-50">75%</h3>
												<p class="text-mute m-0 mb-2">Positive</p>
												<p class="mb-1 fs-12"><span class="fs-12 fw-medium text-primary"><i class="fa-solid fa-caret-up me-1"></i>+2.3% </span>vs last month</p>

											</div>
											<div class="mt-3">
												<img src="assets/img/icons/green-bar.png" class="img-fluid">
											</div>
										</div>
									</div>

									<div class="col-6 be-1 bb-1 ">
										<div class="d-flex gap-2 align-items-end justify-content-between bg-light p-2 rounded mb-3 px-4 py-2">
											<div class="w-75">
												<h3 class="mb-0 fs-24 fw-500 l-h-50">20%</h3>
												<p class="text-mute m-0 mb-2">Neutral</p>
												<p class="mb-1 fs-12"><span class="fs-12 fw-medium text-primary"><i class="fa-solid fa-caret-up me-1"></i>+2.3% </span>vs last month</p>

											</div>
											<div class="mt-3">
												<img src="assets/img/icons/yellow-bar.png" class="img-fluid">
											</div>
										</div>
									</div>


									<div class="col-6 be-1 bb-1 ">
										<div class="d-flex gap-2 align-items-end justify-content-between bg-light p-2 rounded mb-3 px-4 py-2">
											<div class="w-75">
												<h3 class="mb-0 fs-24 fw-500 l-h-50">5%</h3>
												<p class="text-mute m-0 mb-2">Negative</p>
												<p class="mb-1 fs-12"><span class="fs-12 fw-medium text-primary"><i class="fa-solid fa-caret-up me-1"></i>+2.3% </span>vs last month</p>

											</div>
											<div class="mt-3">
												<img src="assets/img/icons/red-bar.png" class="img-fluid">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
									<h5>Your recent activity </h5>

									<!-- <button type="button" class="btn btn-secondary btn-sm">View all</button> -->

								</div>
							</div>
							<!-- <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between w-50">
							<span>10:10</span>
							<span class="bg-primary h-25 w-25">&nbsp;</span>
							<p>Marked Ticket ID 324424 as closed </p>
						</div>
                        </div> -->

							<div class="card-body schedule-timeline">
								<div class="d-flex align-items-start">
									<div class="d-flex align-items-center active-time">
										<span>10:10 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
										<span><i class="ti ti-point-filled text-primary fs-20"></i></span>
									</div>
									<div class="flex-fill ps-3 pb-4 timeline-flow">
										<div class="bg-light p-2 rounded">
											<p class="fw-medium text-gray-9 mb-1">Marked Ticket ID 324424 as closed </p>
											<!-- <span>Marketing</span> -->
										</div>
									</div>
								</div>
								<div class="d-flex align-items-start">
									<div class="d-flex align-items-center active-time">
										<span>08:40 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
										<span><i class="ti ti-point-filled text-secondary fs-20"></i></span>
									</div>
									<div class="flex-fill ps-3 pb-4 timeline-flow">
										<div class="bg-light p-2 rounded">
											<p class="fw-medium text-gray-9 mb-1">Responded to Ticket ID 2349</p>
											<!-- <span>Review</span> -->
										</div>
									</div>
								</div>
								<div class="d-flex align-items-start">
									<div class="d-flex align-items-center active-time">
										<span>07:10 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
										<span><i class="ti ti-point-filled text-danger fs-20"></i></span>
									</div>
									<div class="flex-fill ps-3 pb-4 timeline-flow">
										<div class="bg-light p-2 rounded">
											<p class="fw-medium text-gray-9 mb-1">Marked Ticket ID 324424 as closed </p>
											<!-- <span>Celebration</span> -->
										</div>
									</div>
								</div>

								<div class="d-flex align-items-start">
									<div class="d-flex align-items-center active-time">
										<span>08:40 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
										<span><i class="ti ti-point-filled text-secondary fs-20"></i></span>
									</div>
									<div class="flex-fill ps-3 pb-4 timeline-flow">
										<div class="bg-light p-2 rounded">
											<p class="fw-medium text-gray-9 mb-1">Responded to Ticket ID 2349</p>
											<!-- <span>Review</span> -->
										</div>
									</div>
								</div>

								<!-- <div class="d-flex align-items-start">
                                    <div class="d-flex align-items-center active-time">
                                        <span>01:15 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                        <span><i class="ti ti-point-filled text-success fs-20"></i></span>
                                    </div>
                                    <div class="flex-fill ps-3 pb-4 timeline-flow">
                                        <div class="bg-light p-2 rounded">
                                            <p class="fw-medium text-gray-9 mb-1">Responded to Ticket ID 2349</p>
                                          
                                        </div>
                                    </div>
                                </div>

								
								<div class="d-flex align-items-start">
                                    <div class="d-flex align-items-center active-time">
                                        <span>12:15 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                        <span><i class="ti ti-point-filled text-warning fs-20"></i></span>
                                    </div>
                                    <div class="flex-fill ps-3 pb-4 timeline-flow">
                                        <div class="bg-light p-2 rounded">
                                            <p class="fw-medium text-gray-9 mb-1">Responded to Ticket ID 2349</p>
                                          
                                        </div>
                                    </div>
                                </div> -->
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- /Page Wrapper -->


			<!-- Offcanvas 1 -->
			<div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvas1" aria-labelledby="label1">
				<!-- <div class="offcanvas-header">
						<h5 class="offcanvas-title" id="label1">Offcanvas 1</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
					</div> -->
				<div class="offcanvas-body">
					<div class="">
						<div class="card-header">
							<div class="d-flex align-items-center justify-content-between mb-0">
								<span class="fs-20 fw-bold text-dark">Search by:</span>
								<!-- <a href="#" class="fs-18 text-success">Clear</a> -->
							</div>
						</div>
						<div class="card-body">
							<div class="mb-0">
								<label class="form-label  mb-1"></label>
								<input type="text" class="form-control" placeholder="Ticket ID">
							</div>
							<!-- <div class="mb-3 d-none">
									<label class="form-label  mb-1">Ticket ID</label>
									<p class="text-dark">128B</p>
									
								</div> -->
							<div class="mb-0">
								<label class="form-label  mb-1"></label>
								<input type="text" class="form-control" placeholder="Employee name ">
								<!-- <select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select> -->
							</div>
							<div class="mb-0">
								<label class="form-label  mb-1"></label>
								<input type="text" class="form-control" placeholder="Subject">
								<!-- <select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select> -->
							</div>
							<div class="mb-0">
								<label class="form-label  mb-1"></label>
								<input type="text" class="form-control" placeholder="Floor Number ">
								<!-- <select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select> -->
							</div>
							<div class="mb-0">
								<label class="form-label  mb-1"></label>
								<select class="form-select" placeholder="">
									<option selected>Status</option>
									<option>Not picked</option>
									<option>Open</option>
									<option>Resolved</option>
									<option>Close</option>
									<option>Reopen</option>
									<option>Due today</option>
									<option>Overdue</option>
								</select>
							</div>
							<div class="mb-0">
								<label class="form-label  mb-1"></label>
								<select class="form-select" placeholder="">
									<option selected>Priority</option>
									<option>Urgent</option>
									<option>High</option>
									<option>Medium</option>
									<option>Low</option>
								</select>
							</div>
							<div class="mb-0">
								<label class="form-label mb-1"> </label>
								<select class="form-select" placeholder="">
									<option selected>Category</option>
									<option>Hardware</option>
									<option>Software</option>
								</select>
							</div>
							<div class="mb-2">
								<label class="form-label  mb-1"> </label>
								<select class="form-select" placeholder="">
									<option selected>Sub category</option>
									<option>Mouse</option>
									<option>Keyboard</option>
									<option>Figma</option>
								</select>
							</div>
							<div class="mb-2 rangg">
								<label class="form-label  mb-1">Created on </label>
								<input type="text" name="daterange" class="form-control" value="01/01/2018 - 01/15/2018" />
							</div>

							<div class="mb-4 rangg">
								<label class="form-label  mb-1">Due on</label>
								<input type="text" name="daterange" class="form-control" value="01/01/2018 - 01/15/2018" />

							</div>

							<!-- <div class="mb-3">
									<label class="form-label mb-1">Companies</label>
									<input type="text" class="form-control" placeholder="">
								</div>

								<div class="mb-3">
									<label class="form-label mb-1">Tags</label>
									<input type="text" class="form-control" placeholder="">
								</div> -->

							<div class="d-flex justify-content-start mt-2">
								<button type="button" class="btn btn-primary btn-md fs-12 text-uppercase" data-bs-dismiss="offcanvas">Apply filters</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Offcanvas 1 -->



			<?php include 'includes/footer.php'; ?>
		</div>
		<!-- /Main Wrapper -->
	</div>


	<?php include 'includes/script.php'; ?>
	<script>
		$(function() {
			$('input[name="daterange"]').daterangepicker({
				opens: 'left'
			}, function(start, end, label) {
				console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
			});
		});
	</script>

</body>

</html>