<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Ticketing System | ticket-details.php</title>


	<?php include 'includes/style.php'; ?>

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">



		<?php include 'includes/header.php'; ?>
		<?php include 'includes/sidebar.php'; ?>

		<!-- Page Wrapper -->
		 <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="mb-2">
                    <h6 class="fw-medium d-flex align-items-center"><a href="tickets"><i class="ti ti-arrow-left me-2"></i>Ticket Details</a></h6>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
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
                    <!-- <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_ticket" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Ticket</a>
                    </div> -->
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="row">
                <div class="col-xl-9 col-md-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                            <div class="d-flex align-items-center flex-wrap">
                            <h5 class="text-info fw-medium me-3">Laptop Issue</h5>
                            <span class="badge badge-info badge-md  mb-0 me-3 mb-sm-0 mb-2">Tic - 001</span>
                            <span class="badge bg-danger me-3"><i class="ti ti-circle-filled fs-5 me-1"></i>High</span>
                            <span class="badge bg-outline-pink d-flex align-items-center ms-1"><i class="ti ti-circle-filled fs-5 me-1"></i>Open</span>
                            </div>
                           
                            <div class="d-flex align-items-center">
                                <span class="badge bg-secondary me-3"><i class="ti ti-circle-filled fs-5 me-1"></i>Software</span>
                                <span class="badge bg-outline-primary d-flex align-items-center ms-1"><i class="ti ti-circle-filled fs-5 me-1"></i>Software update</span>
                                <!-- <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle px-2 py-1 btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Mark as Private
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Mark as Private</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Mark as Public </a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="d-flex align-items-start justify-content-between border-bottom flex-wrap  mb-3">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="mb-3">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <!-- <span class="badge badge-info badge-md  mb-3 me-3">Tic - 001</span> -->
                                            <p class="d-flex align-items-center mb-2 me-2"><i class="ti ti-calendar-bolt me-1"></i><b>Created on: </b>  7th September 2025 </p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <!-- <h5 class="fw-semibold me-2">Laptop Issue</h5> -->
                                                <!-- <span class="badge bg-outline-pink d-flex align-items-center ms-1"><i class="ti ti-circle-filled fs-5 me-1"></i>Open</span> -->
                                            </div>
                                            <span class="d-block mb-1"><b> Created by:</b></span>
                                            <div class="d-flex align-items-center   row-gap-2">
                                                 <div>
                                                 <img src="assets/img/users/user-01.webp" class="avatar avatar-md rounded-circle me-2" alt="img"> 
                                                 </div>   
                                                <!-- <p class="d-flex align-items-center  mb-0 me-2">
                                                     
                                                </p> -->
                                                <div>
                                                
                                                <span class=""><span class="text-primary">John Smith,</span>  AVP, International Sales <br>2nd floor. Seat no 14.  </span>
                                                </div>
                                                <!-- <p class="d-flex align-items-center mb-0"><i class="ti ti-message-circle-share me-1"></i>9 Comments</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <a href="#" class="btn btn-primary"><i class="ti ti-arrow-forward-up me-1"></i>Post a Reply</a>
                                    </div>
                                </div>
                                <div class=" mb-sm-3 mb-1 pb-sm-3 pb-1">
                                    <div>
                                        <p class="mb-2 mb-sm-3">For the past week, my laptop has been experiencing intermittent freezing issues. The freezes occur randomly, approximately 3-4 times a day, and last about 30-60 seconds each time. During these freezes, the cursor
                                            becomes unresponsive, and I am unable to click on anything or use keyboard shortcuts. The issue usually resolves itself, but it significantly disrupts my work.
                                        </p>
                                        <ul class="list-styled-dotted pb-sm-3 pb-0">
                                            <li class="ms-3 ms-sm-4 mb-2 mb-sm-3">I first noticed the problem on February 1, 2024, while using Google Meet for a video conference. Since then, the issue has occurred during various tasks, including browsing with Chrome, using Microsoft Office
                                                applications, and even when the laptop is idle.</li>
                                            <li class="ms-3 ms-sm-4">Error messages: No specific error messages have appeared, but the Task Manager (when accessible) shows a spike in CPU usage to 100% during these freezes.</li>
                                        </ul>
                                    </div>
                                
                                </div>
                                <div class="d-flex align-items-center flex-wrap">
                                                <span class="badge bg-light fw-normal me-2 mt-2">Screenshot.png<i class="ti ti-download ms-1"></i></span>
                                                <span class="badge bg-light fw-normal me-2 mt-2">Screenshot.png<i class="ti ti-download ms-1"></i></span>
                                                <span class="badge bg-light fw-normal me-2 mt-2">Screenshot.png<i class="ti ti-download ms-1"></i></span>
                                                <span class="badge bg-light fw-normal mt-2">Screenshot.png<i class="ti ti-download ms-1"></i></span>
                                            </div>
                                
                            </div>
                        </div>
                    </div>

                    <h5 class="py-sm-3 py-2">Ticket History</h5>

                    <div class="card">
                        <div class="card-body">
                        <div>
                                    <div class="border-bottom mb-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded me-2 flex-shrink-0"><img src="assets/img/users/user-01.webp" alt="Img"></span>
                                            <div>
                                            <span class=""><span class="text-primary">John Smith,</span>  AVP, International Sales <br>2nd floor. Seat no 14.  </span>
                                                <!-- <h6 class="mb-1">Marilyn Siegle</h6> -->
                                               
                                            </div>
                                            </div>
                                            <p class="d-flex justify-content-end text-end mt-sm-0 mt-2"><i class="ti ti-calendar-bolt me-1"></i>Updated 8 hours ago</p>
                                        </div>
                                        <div>
                                            <div class="mb-sm-3 mb-1">
                                                <p>Check for any pending updates and installing them to see if it resolves the issue</p>
                                            </div>
                                            <!-- <div class="d-flex align-items-center mt-3">
                                                <a href="#" class="d-inline-flex align-items-center text-primary fw-medium me-3"><i class="ti ti-arrow-forward-up me-1"></i>Reply</a>
                                                <p><a href="#" class="d-flex align-items-center"><i class="ti ti-message-circle-share me-1"></i>1 Comments</a></p>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-3 ">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-center">
                                            <span class="avatar avatar-md avatar-rounded me-2 flex-shrink-0"><img src="assets/img/users/user-09.webp" alt="Img"></span>
                                            <div>
                                            <span class=""><span class="text-primary">James Hendriques,</span>  AVP, International Sales <br>2nd floor. Seat no 14.  </span>
                                                <!-- <h6 class="mb-1">Marilyn Siegle</h6> -->
                                               
                                            </div>
                                            </div>
                                            <p class="d-flex justify-content-end text-end mt-sm-0 mt-2"><i class="ti ti-calendar-bolt me-1"></i>Updated 5 hours ago</p>
                                        </div>
                                        <div>
                                            <div class="mb-sm-3 mb-1">
                                                <p>This issue disrupts meetings, delays task completion, and affects my overall productivity.</p>
                                            </div>
                                            <!-- <div class="d-flex align-items-center mt-3">
                                                <a href="#" class="d-inline-flex align-items-center text-primary fw-medium me-3"><i class="ti ti-arrow-forward-up me-1"></i>Reply</a>
                                                <p><a href="#" class="d-flex align-items-center"><i class="ti ti-message-circle-share me-1"></i>1 Comments</a></p>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="border-bottom mb-3 ">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-center">
                                            <span class="avatar avatar-md avatar-rounded me-2 flex-shrink-0"><img src="assets/img/users/user-01.webp" alt="Img"></span>
                                            <div>
                                            <span class=""><span class="text-primary">John Smith,</span>  AVP, International Sales <br>2nd floor. Seat no 14.  </span>
                                                <!-- <h6 class="mb-1">Marilyn Siegle</h6> -->
                                               
                                            </div>
                                            </div>
                                            <p class="d-flex justify-content-end text-end mt-sm-0 mt-2"><i class="ti ti-calendar-bolt me-1"></i>Updated 6 hours ago</p>
                                        </div>
                                        <div>
                                            <div class="mb-sm-3 mb-1">
                                                <p>Check the System and Application logs in the Event Viewer for warnings or errors that coincide with the times the freezes occur.</p>
                                            </div>
                                            <!-- <div class="d-flex align-items-center mt-3">
                                                <a href="#" class="d-inline-flex align-items-center text-primary fw-medium me-3"><i class="ti ti-arrow-forward-up me-1"></i>Reply</a>
                                                <p><a href="#" class="d-flex align-items-center"><i class="ti ti-message-circle-share me-1"></i>1 Comments</a></p>
                                            </div> -->
                                        </div>
                                    </div>

                        </div>
                    </div>


                    <div class="card d-none">
                        <div class="card-body">
                       
                        </div>
                    </div>

                    <div class="card d-none">
                        <div class="card-body">
                        <div class="border-bottom mb-3 pb-3">
                                  
                                </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="card">
                        <div class="card-header p-3">
                            <h4>Ticket Details</h4>
                        </div>
                        <div class="card-body p-0">
                        <div class="border-bottom px-sm-4 px-1 py-2">
                                <span class="fs-12">Ticket ID</span>
                                <p class="text-dark">#TKT-1948</p>
                            </div>
                            <div class="border-bottom px-sm-4 px-1 py-2">
                                <span class="fs-12">Status</span>
                                <p class="text-dark">Open</p>
                            </div>
                            <div class="border-bottom px-sm-4 px-1 py-2 mb-2">
                                <span class="fs-12">Priority </span>
                                <p class="text-dark">Low</p>
                            </div>
                           
                            <!-- <div class="border-bottom p-2">
                                <div class="mb-3">
                                    <label class="form-label">Change Priority</label>
                                    <select class="select">
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Assign To</label>
                                    <select class="select">
                                        <option>Edgar Hansel</option>
                                        <option>Juan Hermann</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="form-label">Ticket Status</label>
                                    <select class="select">
                                        <option>Open</option>
                                        <option>On Hold</option>
                                        <option>Reopened</option>
                                    </select>
                                </div>
                            </div> -->
                            <span class="fs-12 px-sm-4 px-1 mt-2 mb-0">Submitted by:</span>
                            <div class="d-flex align-items-center border-bottom px-sm-4 px-1 py-2 mb-2">
                                <span class="avatar avatar-md me-2 flex-shrink-0"><img src="assets/img/users/user-01.webp" class="rounded-circle" alt="Img"></span>
                                <div>
                                    
                                    <p class="text-dark mb-0">John Smith</p>
                                    <p class="text-dark">AVP, International Sales</p>
                                </div>
                            </div>
                            <span class="fs-12 px-sm-4 px-1 mt-2 mb-0">Assigned to:</span>
                            <div class="d-flex align-items-center border-bottom px-sm-4 px-1 py-2 mt-0 mb-2">
                                <span class="avatar avatar-md me-2 flex-shrink-0"><img src="assets/img/users/user-09.webp" class="rounded-circle" alt="Img"></span>
                                <div>
                                    
                                    <p class="text-dark mb-0">James Hendriques</p>
                                    <p class="text-dark">IT Specialist, IT  </p>
                                </div>
                            </div>
                            <div class="border-bottom px-sm-4 px-1 py-2">
                                <span class="fs-12">Category</span>
                                <p class="text-dark"> Software </p>
                            </div>
                            <div class="border-bottom px-sm-4 px-1 py-2">
                                <span class="fs-12">Sub category</span>
                                <p class="text-dark"> Software update</p>
                            </div>
                            <!-- <div class="border-bottom px-4 py-2">
                                <span class="fs-12">Submitted by: </span>
                                <p class="text-dark mb-0">John Smith</p>
                                <p class="text-dark">AVP, International Sales</p>
                            </div>
                            <div class="border-bottom px-4 py-2">
                                <span class="fs-12">Assigned to: </span>
                                <p class="text-dark mb-0">John Smith</p>
                                <p class="text-dark">IT Specialist, IT  </p>
                            </div> -->
                            <!-- <div class="border-bottom p-2">
                                <span class="fs-12">Email</span>
                                <p class="text-dark"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eaa28f86868b848baa8f928b879a868fc4898587">[email&#160;protected]</a></p>
                            </div> -->
                            <div class="px-sm-4 px-1 py-2">
                                <span class="fs-12">Last Updated / Closed On</span>
                                <p class="text-dark">25 May 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
		<?php include 'includes/footer.php'; ?>
    </div>
    <!-- /Page Wrapper -->

    <!-- Add Ticket -->
    <div class="modal fade" id="add_ticket">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Ticket</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="tickets">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Title">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Event Category</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Internet Issue</option>
                                        <option>Redistribute</option>
                                        <option>Computer</option>
                                        <option>Complaint</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" placeholder="Enter Subject">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Assign To</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Teresa</option>
                                        <option>James</option>
                                        <option>Daniel</option>
                                        <option>Jacquelin</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Ticket Description</label>
                                    <textarea class="form-control" placeholder="Add Question"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Priority</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Medium</option>
                                    </select>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Closed</option>
                                        <option>Reopened</option>
                                        <option>Inprogress</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Add Ticket</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Ticket -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Delete</h4>
                    <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="tickets-grid" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->



	</div>
	<?php include 'includes/script.php'; ?>


</body>

</html>