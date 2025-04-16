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

			
				<div class="row g-1">
					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill">
							<div class="card-body">
							<h3 class="mb-1 fs-24">26 </h3>
								<span class="fs-14 fw-medium text-body">New Tickets (today)</span>
								<p class="fs-12 mb-0">&nbsp; </p>
								<p class="fs-12 mb-0">&nbsp; </p>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill">
							<div class="card-body">
							<h3 class="mb-1 fs-24">13</h3>
								<span class="fs-14 fw-medium text-body">Tickets In Progress</span>
								<p class="fs-12 mb-0">&nbsp; </p>
								<p class="fs-12 mb-0">&nbsp; </p>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill">
							<div class="card-body">
							<h3 class="mb-1 fs-24">09</h3>
								<span class="fs-14 fw-medium text-body">Resolved Today</span>
								<p class="fs-12 mb-0">&nbsp; </p>
								<p class="fs-12 mb-0">&nbsp; </p>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill">
							<div class="card-body px-3 py-3">
							<h3 class="mb-1 fs-24">17</h3>
								<span class="fs-14 fw-medium text-body mb-0">Overdue Tickets</span>
								<!-- <p class="fs-12 mb-0">&nbsp; </p> -->
								<div class="d-flex justify-content-between mb-0">
									<div class="shadow-none px-2 py-1 mb-0 bg-light-subtle rounded">
									<span class="fs-12 fw-medium text-body">24 Hrs</span>
									<p class="fs-10  mb-0">7 tickets </p>
									</div>
									<div class="shadow-none px-2  py-1 mb-0 bg-light-subtle rounded">
									<span class="fs-12 fw-medium text-body">48 Hrs</span>
									<p class="fs-10  mb-0">10 tickets </p>
									</div>
									<div class="shadow-none px-2 py-1 mb-0 bg-light-subtle rounded">
									<span class="fs-12 fw-medium text-body">72 Hrs</span>
									<p class="fs-10  mb-0">15 tickets </p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill">
							<div class="card-body">
							<h3 class="mb-1 fs-24">3.67<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14 fw-medium text-body">Avg. 1st Response Time</span>
								<p class="fs-12  mb-0">from last month </p>
								<p class="fs-12 mb-0">&nbsp; </p>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill">
							<div class="card-body">
							<h3 class="mb-1 fs-24">3.67<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14 fw-medium text-body">Avg. Resolve Time</span>
								<p class="fs-12  mb-0">from last month </p>
								<p class="fs-12 mb-0">&nbsp; </p>
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
										<a href="javascript:;" data-bs-toggle="offcanvas"  data-bs-target="#offcanvas1"class="btn btn-primary btn-sm h-25 me-3">Search by filters</a>
									
									
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
							<div class="card-body p-0">
								<div class="table-responsive table-responsive-lg">
									<table class="table ">
										<thead class="thead-light">
											<tr>

												<th scope="col">Ticket ID</th>
												<th scope="col">Employee Name</th>
												<th scope="col">Ticket Detail</th>
												<th scope="col">Category</th>
												<th scope="col">Status</th>
												<th scope="col">Priority</th>
												<th scope="col">Ticket Date</th>
												<th scope="col">Due Date</th>
												<th scope="col">Location</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
												09834
												</td>
												<td class="">
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-32.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0 fs-12">James MIller </p>
															<span class="fs-12 d-block mb-0 fs-12">International Sales </span>
															<span class="fs-12 d-block mb-0 fs-12" >Vice President</span>

														</div>
													</div>

												</td>

												<td>
													<p class="fs-12 mb-0">Unable to Connect to Office Wi-Fi</p>
													<div class="row">
														<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12">Created on:</span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>
														</div>
														<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12">Due on:</span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>

														</div>
													</div>
												</td>
												<td>
												 <p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												 <p class="fs-12 mb-0">Mouse</p>
												
												</td>
												<td>
													<p class="fs-12 d-inline-flex align-items-center mb-1">
														<i class="ti ti-circle-filled fs-10 me-1 text-danger"></i>Due today
													</p>
												</td>
												<td>
													<span class="badge bg-soft-primary">Low</span>
												</td>

												<td>
													<p class="fs-12  mb-0">12 Sept 2025</p>
												</td>
												<td>
													<p class="fs-12 text-danger mb-0">12 Sept 2025</p>
												</td>
												<td><p class="fs-12">1st Floor
												Seat no 22</p></td>	
												<td>
													<a href="#" class="btn btn-secondary py-1 btn-sm">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09836
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-33.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0">Henry Full </p>
															<span class="fs-12 d-block mb-0">Aministration</span>
															<span class="fs-12 d-block mb-0">Manager</span>

														</div>
													</div>

												</td>

												<td>
													<p class="fs-12 mb-0">Frequent Wi-Fi Disconnection</p>
												</td>
												<td>
												 <p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												 <p class="fs-12 mb-0">Mouse</p>
												
												</td>
												<td>
													<p class="fs-12 d-inline-flex align-items-center mb-1">
														<i class="ti ti-circle-filled fs-10 me-1 text-danger"></i>Due today
													</p>
												</td>
												<td>
													<span class="badge bg-soft-warning">low</span>
												</td>

												<td>
													<p class="fs-12  mb-0">11 Sept 2025</p>
												</td>
												<td>
													<p class="fs-12 text-danger mb-0">12 Sept 2025</p>
												</td>
												<td><p>1st Floor
												Seat no 20</p></td>	
												<td>
													<a href="#" class="btn btn-secondary py-1 btn-sm">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09836
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-34.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0">Dickson Joe</p>
															<span class="fs-12 d-block mb-0">Brand</span>
															<span class="fs-12 d-block mb-0">Content writer</span>

														</div>
													</div>

												</td>

												<td>
													<p class="fs-12 mb-0">LAN Cable Not Detecting Network</p>
												</td>
												<td>
												 <p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												 <p class="fs-12 mb-0">Mouse</p>
												
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1">
														<i class="ti ti-circle-filled fs-10 me-1 text-secondary"></i>Not picked
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												<td>
													<p class="fs-12   mb-0">11 Sept 2025</p>
												</td>
												<td>
													<p class="fs-12 mb-0">12 Sept 2025</p>
												</td>
												<td><p>1st Floor
												Seat no 19</p></td>	
												<td>
													<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09837
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-35.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0">Sarah Thompson</p>
															<span class="fs-12 d-block mb-0">Human Resources</span>
															<span class="fs-12 d-block mb-0">HR Manager</span>

														</div>
													</div>

												</td>

												<td>
													<p class="fs-12 mb-0">IP Conflict Error</p>
												</td>
												<td>
												 <p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												 <p class="fs-12 mb-0">Mouse</p>
												
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1">
														<i class="ti ti-circle-filled fs-10 me-1 text-secondary"></i>Not picked
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												<td>
													<p class="fs-12  mb-0">10 Sept 2025</p>
												</td>
												<td>
													<p class="fs-12 mb-0">12 Sept 2025</p>
												</td>
												<td><p>1st Floor
												Seat no 22</p></td>	
												<td>
												<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09838
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-36.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0">Emily Rodriguez</p>
															<span class="fs-12 d-block mb-0">Finance</span>
															<span class="fs-12 d-block mb-0">Finance Analyst</span>

														</div>
													</div>

												</td>

												<td>
													<p class="fs-12 mb-0">Network Printer Not Found</p>
												</td>
												<td>
												 <p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												 <p class="fs-12 mb-0">Mouse</p>
												
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1">
														<i class="ti ti-circle-filled fs-10 me-1 text-warning"></i>On going
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												<td>
													<p class="fs-12 mb-0">10 Sept 2025</p>
												</td>
												<td>
													<p class="fs-12 mb-0">13 Sept 2025</p>
												</td>
												<td><p>1st Floor
												Seat no 02</p></td>	
												<td>
												<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09838
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-28.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-18.jpg" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0">Sophia Patel </p>
															<span class="fs-12 d-block mb-0">Human Resources</span>
															<span class="fs-12 d-block mb-0">Talent Acquisition Specialist</span>

														</div>
													</div>

												</td>

												<td>
													<p class="fs-12 mb-0">Access Denied to Shared Network Drive</p>
												</td>
												<td>
												 <p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												 <p class="fs-12 mb-0">Mouse</p>
												
												</td>
												<td>
													<p class="fs-12 d-inline-flex align-items-center mb-1">
														<i class="ti ti-circle-filled fs-10 me-1 text-warning"></i>On going
													</p>
												</td>
												<td>
													<span class="badge bg-soft-success">medium</span>
												</td>

												<td>
													<p class="fs-12  mb-0">07 Sept 2025</p>
												</td>
												<td>
													<p class="fs-12 mb-0">07 Sept 2025</p>
												</td>
												<td><p>1st Floor
												Seat no 19</p></td>	
												<td>
												<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09838
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-38.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0">Isabella Morris</p>
															<span class="fs-12 d-block mb-0">Operations</span>
															<span class="fs-12 d-block mb-0">Project Coordinator</span>

														</div>
													</div>

												</td>

												<td>
													<p class="fs-12 mb-0">Unable to Ping Server</p>
												</td>
												<td>
												 <p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												 <p class="fs-12 mb-0">Mouse</p>
												
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1">
														<i class="ti ti-circle-filled fs-10 me-1 text-success"></i>Resolved
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												<td>
													<p class="fs-12  mb-0">09 Sept 2025</p>
												</td>
												<td>
													<p class="fs-12 mb-0">13 Sept 2025</p>
												</td>
												<td><p>1st Floor
												Seat no 06</p></td>	
												<td>
												<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
				</div>

				<div class="row mb-4">
					<div class="col-xl-12 col-md-12">
						<div class="card flex-fill overflow-hidden">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h5 class="">Average tickets summary</h5>
									<div class="dropdown mb-2">
										<a href="javascript:void(0);"
											class="btn btn-white border btn-sm d-inline-flex align-items-center"
											data-bs-toggle="dropdown">
											<i class="ti ti-calendar me-1"></i>Current year
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Custom Year</a>
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
																<i class="fa fa-fw fa-square fs-12" style="color:#f4d03f;"></i> Avg Tickets Reopened </p>
															<h2 class="fw-500 m-0">200</h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-9 p-0 bs-1" style="position: relative;">
									<!-- <div id="mixed-chart" class="chart-set"></div> -->
									<div  id="chart-bar"></div>
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
																class="img-fluid rounded-circle" alt="img">
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
																class="img-fluid rounded-circle" alt="img">
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
																class="img-fluid rounded-circle" alt="img">
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
																class="img-fluid rounded-circle" alt="img">
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
																class="img-fluid rounded-circle" alt="img">
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
																class="img-fluid rounded-circle" alt="img">
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
								<h5 class="">Employees satisfaction on tickets</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-6 be-1 bb-1 ">
										<div class="card border border-0 shadow-none ps-10 px-2 py-2">
											<div>
												<p class="text-mute m-0 mb-3">Tickets picked</p>
												<h3 class="mb-0 fw-500 l-h-50">180 tickets</h3>
											</div>
										</div>
									</div>
									<div class="col-6 bb-1 ">
										<div class="card shadow-none ps-10">
										<div class="d-flex align-items-center justify-content-between px-md-4 px-2 py-md-3 py-2">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fa fa-thumbs-up text-success"></i>
											</div>
												<div>
													<p class="text-mute m-0">Positive</p>
													<h3 class="mb-0 fw-500">75%</h3>
												</div>
											</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-success" style="width: 75%"></div>
											</div>
										</div>
									</div>
									<div class="col-6 be-1 ">
										<div class="card shadow-none pe-10 mt-20">
										<div class="d-flex align-items-center justify-content-between px-md-4 px-2 py-md-3 py-2">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fa fa-thumbs-up text-warning"></i>
											</div>
											<div>
												<p class="text-mute m-0">Neutral</p>
												<h3 class="mb-0 fw-500">20%</h3>
											</div>
										</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-warning" style="width: 20%"></div>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card shadow-none ps-10 mt-20">
										<div class="d-flex align-items-center justify-content-between px-md-4 px-2 py-md-3 py-2">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fa fa-thumbs-up text-danger"></i>
											</div>
												<div>
													<p class="text-mute m-0">Negative</p>
													<h3 class="mb-0 fw-500">5%</h3>
												</div>
											</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-danger" style="width: 5%"></div>
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

								<button type="button" class="btn btn-secondary btn-sm">View all</button>

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
                                        <span>10:10 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
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
                                        <span>08:40 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
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
								<div class="d-flex align-items-center justify-content-between mb-3">
									<span class="fs-20 fw-bold text-dark">Filters</span>
									<a href="#" class="fs-14 text-success">Clear</a>
								</div>
							</div>
							<div class="card-body">
							<div class="mb-3">
									<label class="form-label  mb-1">Ticket ID</label>
									<input type="text" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label  mb-1">Ticket ID</label>
									<p class="text-dark">128B</p>
									<!-- <input type="text" class="form-control"> -->
									<!-- <select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select> -->
								</div>
								<div class="mb-3">
									<label class="form-label  mb-1">Employee name </label>
									<input type="text" class="form-control">
									<!-- <select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select> -->
								</div>
								<div class="mb-3">
									<label class="form-label  mb-1">Status</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label  mb-1">Priority</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Category </label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label  mb-1">Sub category </label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label  mb-1">Created on </label>
									<div class="input-icon-end position-relative">
                            <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy" id="dateRangePicker">
                            <span class="input-icon-addon">
                                <i class="ti ti-chevron-down"></i>
                            </span>
                        </div>
								</div>

								<!-- <div class="mb-3">
									<label class="form-label  mb-1">Due on</label>
												
									<div class="input-icon-end position-relative">
										<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy" id="dateRangePicker">
										<span class="input-icon-addon">
											<i class="ti ti-chevron-down"></i>
										</span>
									</div>
                    
								</div> -->

								<!-- <div class="mb-3">
									<label class="form-label mb-1">Companies</label>
									<input type="text" class="form-control" placeholder="">
								</div>

								<div class="mb-3">
									<label class="form-label mb-1">Tags</label>
									<input type="text" class="form-control" placeholder="">
								</div> -->

								<div class="d-flex justify-content-start">
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

</body>

</html>