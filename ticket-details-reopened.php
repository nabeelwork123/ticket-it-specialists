<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <title>Ticketing System | Ticket Details Reopened</title>


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
                        <h6 class="fw-medium d-flex align-items-center"><a href="tickets"><i
                                    class="ti ti-arrow-left me-2"></i>Ticket Details</a></h6>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                        <!-- <div class="me-2 mb-2">
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-file-export me-1"></i>Export
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                                class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                                class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_ticket" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Ticket</a>
                    </div> -->
                        <div class="head-icons ms-2">
                            <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <div class="row">
                    <div class="col-xl-9 col-md-8">
                        <div class="card">
                            <div
                                class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3 py-0 mb-0">
                                <div class="d-flex align-items-center flex-wrap ">
                                    <h5 class="text-info fw-medium me-3">Laptop Issue</h5>
                                    <span class="badge badge-info badge-md  mb-0 me-3 mb-sm-0 mb-2 d-none">Tic -
                                        001</span>
                                    <!-- <span class="badge bg-danger me-3 "><i class="ti ti-circle-filled fs-5 me-1"></i>High</span> -->
                                    <span class="badge bg-success d-flex align-items-center ms-1"><i
                                            class="ti ti-circle-filled fs-5 me-1"></i>Reopened</span>
                                </div>

                                <!-- <div class="d-flex align-items-center">
                                <span class="badge bg-secondary me-3 "><i class="ti ti-circle-filled fs-5 me-1"></i>Software</span>
                                <span class="badge bg-outline-primary d-flex align-items-center ms-1"><i class="ti ti-circle-filled fs-5 me-1"></i>Software update</span>
                                <div class="dropdown">
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
                                </div>
                            </div> -->
                                <div class="mb-3">
                                    <a href="#" class="btn btn-primary btn-sm mt-3"><i
                                            class="ti ti-arrow-forward-up me-1"></i>Post a Reply</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="d-flex align-items-start justify-content-between flex-wrap  mb-0">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="mb-0">
                                            <div class="d-flex align-items-center flex-wrap d-none">
                                                <span class="badge badge-info badge-md  mb-3 me-3">Tic - 001</span>
                                                <p class="d-flex align-items-center mb-2 me-2"><i
                                                        class="ti ti-calendar-bolt me-1"></i><b>Created on: </b> 7th
                                                    September 2025 </p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2 d-none">
                                                <h5 class="fw-semibold me-2">Laptop Issue</h5>
                                                <span class="badge bg-outline-pink d-flex align-items-center ms-1"><i
                                                        class="ti ti-circle-filled fs-5 me-1"></i>Open</span>
                                            </div>
                                            <span class="d-block mb-1 d-none"><b> Created by:</b></span>
                                            <div class="d-flex align-items-center   row-gap-2 d-none">
                                                <div>
                                                    <img src="assets/img/users/user-01.webp"
                                                        class="avatar avatar-md rounded-circle me-2" alt="img">
                                                </div>
                                                <p class="d-flex align-items-center  mb-0 me-2">

                                                </p>
                                                <div>

                                                    <span class=""><span class="text-primary">John Smith,</span> AVP,
                                                        International Sales <br>2nd floor. Seat no 14. </span>
                                                </div>
                                                <!-- <p class="d-flex align-items-center mb-0"><i class="ti ti-message-circle-share me-1"></i>9 Comments</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="mb-3">
                                        <a href="#" class="btn btn-primary"><i class="ti ti-arrow-forward-up me-1"></i>Post a Reply</a>
                                    </div> -->
                                </div>
                                <div class=" mb-sm-3 mb-1 pb-sm-3 pb-lg-0">
                                    <div>
                                        <p class="mb-2 mb-sm-3 fs-12 ">For the past week, my laptop has been
                                            experiencing intermittent freezing issues. The freezes occur randomly,
                                            approximately 3-4 times a day, and last about 30-60 seconds each time.
                                            During these freezes, the cursor
                                            becomes unresponsive, and I am unable to click on anything or use keyboard
                                            shortcuts. The issue usually resolves itself, but it significantly disrupts
                                            my work.
                                        </p>
                                        <ul class="list-styled-dotted pb-sm-3 pb-0">
                                            <li class="ms-3 ms-sm-4 mb-2 mb-sm-3 fs-12">I first noticed the problem on
                                                February 1, 2024, while using Google Meet for a video conference. Since
                                                then, the issue has occurred during various tasks, including browsing
                                                with Chrome, using Microsoft Office
                                                applications, and even when the laptop is idle.</li>
                                            <li class="ms-3 ms-sm-4 fs-12">Error messages: No specific error messages
                                                have appeared, but the Task Manager (when accessible) shows a spike in
                                                CPU usage to 100% during these freezes.</li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="d-flex align-items-center flex-wrap">
                                    <span class="badge bg-dark fw-normal me-2 mt-2">Screenshot.png<i
                                            class="ti ti-download ms-1"></i></span>
                                    <span class="badge bg-dark fw-normal me-2 mt-2">Screenshot.png<i
                                            class="ti ti-download ms-1"></i></span>
                                    <span class="badge bg-dark fw-normal me-2 mt-2">Screenshot.png<i
                                            class="ti ti-download ms-1"></i></span>
                                    <span class="badge bg-dark fw-normal me-2 mt-2">Screenshot.png<i
                                            class="ti ti-download ms-1"></i></span>
                                </div>


                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <!-- <div class="summernote"></div> -->
                                <div id="summernote">
                                    <p>Click here to reply or press</p>
                                </div>

                                <div class="row align-items-center mt-2">
                                    <div class="col-xl-6 col-lg-6 col-12 d-flex align-items-center">
                                        <div class="btn-group mt-2">
                                            <button type="button" class="btn btn-info">Reply</button>
                                            <button type="button"
                                                class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                                id="dropdownMenuReference" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-reference="parent">
                                                <span class="visually-hidden"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                                <li><a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal1">Reply & close ticket</a></li>
                                                <li><a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal2">Reply & change to waiting for customer</a></li>
                                            </ul>
                                        </div>
                                        <!-- <button type="button" class="btn btn-md btn-success me-2">Send</button>
                                    <button type="button" class="btn btn-md btn-outline-dark">Send & close</button> -->
                                    </div>
                                    <div class="d-flex justify-content-end col-xl-6 col-lg-6 col-12 text-end">
                                        <!-- <p>Press c to close the ticket<i class="ti ti-x ms-2"></i></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Ticket History</h4>
                            </div>
                            <div class="card-body">

                                <!--Inner Card (Most recent first) -->
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Michael Philips -->
                                        <div class="d-flex align-items-start justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md rounded-3 me-2 flex-shrink-0"><img src="assets/img/users/user-01.webp" alt="Img"></span>
                                                <div>
                                                    <span class="fs-12"><span class="text-primary">Michael Philips,</span> Product manager </span>
                                                    <p class="fs-12">2nd floor. Seat no 14.</p>
                                                </div>
                                            </div>
                                            <p class="d-flex align-items-start fs-12 justify-content-end text-end mt-sm-0 mt-2">
                                                <i class="ti ti-calendar-bolt me-1"></i>15th April 2025<br>11:38 AM
                                            </p>
                                        </div>
                                        <div>
                                            <p class="fs-12">Yes, I’ll be here. Appreciate the quick help.</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Oliver Smith-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md rounded-3 me-2 flex-shrink-0"><img src="assets/img/users/user-03.webp" alt="Img"></span>
                                                <div>
                                                    <span class="fs-12"><span class="text-primary">Oliver Smith, </span> IT Specialist </span>
                                                </div>
                                            </div>
                                            <p class="d-flex align-items-start fs-12 justify-content-end text-end mt-sm-0 mt-2">
                                                <i class="ti ti-calendar-bolt me-1"></i>15th April 2025<br>10:44 AM
                                            </p>
                                        </div>
                                        <div>
                                            <p class="fs-12">Alright, I’ll need to check the power adapter and the charging port next. Are you available at your desk if I swing by in 10 minutes?</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Michael Philips-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md rounded-3 me-2 flex-shrink-0"><img src="assets/img/users/user-01.webp" alt="Img"></span>
                                                <div>
                                                    <span class="fs-12"><span class="text-primary">Michael Philips,</span> Product manager </span>
                                                    <p class="fs-12">2nd floor. Seat no 14.</p>
                                                </div>
                                            </div>
                                            <p class="d-flex align-items-start fs-12 justify-content-end text-end mt-sm-0 mt-2">
                                                <i class="ti ti-calendar-bolt me-1"></i>14th April 2025<br>04:15 PM
                                            </p>
                                        </div>
                                        <div>
                                            <p class="fs-12">Did that, but still nothing. No response from the laptop.</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Oliver Smith-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md rounded-3 me-2 flex-shrink-0"><img src="assets/img/users/user-03.webp" alt="Img"></span>
                                                <div>
                                                    <span class="fs-12"><span class="text-primary">Oliver Smith, </span> IT Specialist </span>
                                                </div>
                                            </div>
                                            <p class="d-flex align-items-start fs-12 justify-content-end text-end mt-sm-0 mt-2">
                                                <i class="ti ti-calendar-bolt me-1"></i>13th April 2025<br>03:43 PM
                                            </p>
                                        </div>
                                        <div>
                                            <p class="fs-12">Thanks. Let’s try a power reset. Disconnect the charger, remove the battery (if possible), hold the power button for 30 seconds, then plug the charger back in and try turning it on.</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Michael Philips-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md rounded-3 me-2 flex-shrink-0"><img src="assets/img/users/user-01.webp" alt="Img"></span>
                                                <div>
                                                    <span class="fs-12"><span class="text-primary">Michael Philips,</span> Product manager </span>
                                                    <p class="fs-12">2nd floor. Seat no 14.</p>
                                                </div>
                                            </div>
                                            <p class="d-flex align-items-start fs-12 justify-content-end text-end mt-sm-0 mt-2">
                                                <i class="ti ti-calendar-bolt me-1"></i>13th April 2025<br>12:09 PM
                                            </p>
                                        </div>
                                        <div>
                                            <p class="fs-12">No lights or sounds at all. It’s completely unresponsive.</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Oliver Smith-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md rounded-3 me-2 flex-shrink-0"><img src="assets/img/users/user-03.webp" alt="Img"></span>
                                                <div>
                                                    <span class="fs-12"><span class="text-primary">Oliver Smith, </span> IT Specialist </span>
                                                </div>
                                            </div>
                                            <p class="d-flex align-items-start fs-12 justify-content-end text-end mt-sm-0 mt-2">
                                                <i class="ti ti-calendar-bolt me-1"></i>12th April 2025<br>10:22 AM
                                            </p>
                                        </div>
                                        <div>
                                            <p class="fs-12">Hi Michael, sorry to hear that. When you press the power button, do you see any lights or hear any sounds?</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Michael Philips-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap mb-sm-3 mb-2">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md rounded-3 me-2 flex-shrink-0"><img src="assets/img/users/user-01.webp" alt="Img"></span>
                                                <div>
                                                    <span class="fs-12"><span class="text-primary">Michael Philips,</span> Product manager </span>
                                                    <p class="fs-12">2nd floor. Seat no 14.</p>
                                                </div>
                                            </div>
                                            <p class="d-flex align-items-start fs-12 justify-content-end text-end mt-sm-0 mt-2">
                                                <i class="ti ti-calendar-bolt me-1"></i>12th April 2025<br>10:15 AM
                                            </p>
                                        </div>
                                        <div>
                                            <p class="fs-12">Hi Oliver, my laptop suddenly shut down while I was working, and now it won’t turn back on. Could you help?</p>
                                        </div>
                                    </div>
                                </div>


                                <!--History Card Div --->
                            </div>
                        </div>

                        <!--History Card Div --->


                    </div>
                    <div class="col-xl-3 col-md-4">
                        <div class="card">
                            <div class="card-header d-flex align-items-center p-3">
                                <img src="assets/img/icons/ticket-dtl-icon.png" class="img-fluid me-2 mb-1">
                                <h4 class="mb-0">Ticket Details</h4>
                            </div>
                            <div class="card-body px-2 py-0">
                                <div class="row">
                                    <div class="col-lg-l2">
                                        <div class="sdr-box">
                                            <span class="fs-12">Ticket ID</span>
                                            <p class="nw-text-cl fs-12">#TKT-1948</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="sdr-box">
                                            <span class="fs-12">Status</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1"><i
                                                    class="ti ti-circle-filled fs-10 me-1 text-success"></i><b
                                                    class="me-2">Reopened</b> <span
                                                    class="text-danger text-decoration-underline cursorPointer" data-bs-toggle="modal" data-bs-target="#exampleModal">Close ticket</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="sdr-box">
                                            <span class="fs-12">Priority </span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1 l-h-100"><i
                                                    class="ti ti-rectangle-filled fs-10 me-1 text-primary"></i><b
                                                    class="me-2">Low</b></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="sdr-box">
                                            <span class="fs-12">Created on</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">12th April 2025, <span
                                                    class="fst-normal ms-1"> 10:00 AM</span> </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="sdr-box">
                                            <span class="fs-12">Due date</span>
                                            <div>
                                                <p class="nw-text-cl d-flex align-items-center mb-1">23rd April 2025,
                                                    <span class="fst-normal ms-1"> 10:00 AM</span>
                                                </p>
                                                <span class="badge bg-soft-danger mb-0">
                                                    <img src="assets/img/icons/red-icon.png" class="img-fluid me-2 mb-0 mt-0"><span class=""> -2h 50m </span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="sdr-box">
                                            <span class="fs-12">Category</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">Software </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="sdr-box">
                                            <span class="fs-12">Sub Category</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">Software update</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                        <div class="sdr-box" style="border:0;">
                                            <span class="fs-12">Last updated on</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">15th April 2025</p>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex align-items-center p-3 mb-2">
                                <img src="assets/img/icons/user.png" class="img-fluid me-2 mb-1">
                                <h4 class="mb-0">Created by</h4>
                            </div>
                            <div class="card-body px-2 py-0">
                                <div class="row">
                                    <div class="col-lg-l2">
                                        <div class="d-flex align-items-center p-2">
                                            <div>
                                                <img src="assets/img/users/user-01.webp"
                                                    class="avatar avatar-md avatar-3 me-2">
                                            </div>
                                            <div>
                                                <span class="nw-text-cl mb-2">Michael Philips</span>
                                                <p class="fs-12">Product manager</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="sdr-box border-0">
                                            <span class="fs-12">Primary email</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">
                                                michael.philips@email.com</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="sdr-box border-0">
                                            <span class="fs-12">Phone</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">+1 782 342 2398</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="sdr-box border-0">
                                            <span class="fs-12">Location</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">2nd floor, Seat no 22
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="card">
                            <div class="card-header d-flex align-items-center p-3 mb-2">
                                <img src="assets/img/icons/user.png" class="img-fluid me-2 mb-1">
                                <h4 class="mb-0">Assigned to</h4>
                            </div>
                            <div class="card-body px-2 py-0">
                                <div class="row">
                                    <div class="col-lg-l2">
                                        <div class="d-flex align-items-center p-2">
                                            <div>
                                                <img src="assets/img/users/user-03.webp"
                                                    class="avatar avatar-lg avatar-3 me-2">
                                            </div>
                                            <div>
                                                <span class="nw-text-cl mb-2">Oliver Smith</span>
                                                <p class="fs-12">IT Specialist</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="sdr-box border-0">
                                            <span class="fs-12">Primary email</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">oliver.smith@email.com
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="sdr-box border-0">
                                            <span class="fs-12">Phone</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">+1 657 546 3245</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="sdr-box border-0">
                                            <span class="fs-12">Location</span>
                                            <p class="nw-text-cl d-flex align-items-center mb-1">2nd floor, Seat no 22
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
                            <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                                aria-label="Close">
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
                            <p class="mb-3">You want to delete all the marked items, this cant be undone once you
                                delete.</p>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-light me-3"
                                    data-bs-dismiss="modal">Cancel</a>
                                <a href="tickets-grid" class="btn btn-danger">Yes, Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Modal -->

            <!-- Modal -->
            <div class="modal fade rate-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content py-0">
                        <!--<div class="modal-header d-flex align-items-start flex-column px-xl-4 px-md-2 mt-2">
        <h3 class="d-block fs-20 mb-2">Rate Your Support Experience</h3>
        <p>Let us know how satisfied you are with the support you received.</p>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
      </div>-->
                        <div class="modal-body px-xl-4 px-md-2 py-xl-4 py-lg-4">
                            <h3 class="d-block fs-20 mb-2">Rate Your Support Experience</h3>
                            <p>Let us know how satisfied you are with the support you received.</p>
                            <div class="row">
                                <div class="col-lg-4 mb-2">
                                    <a class="fd-back-box text-center">
                                        <img src="assets/img/icons/emoji1.png" class="img-fluid">
                                        <span>Bad</span>
                                    </a>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <a class="fd-back-box text-center">
                                        <img src="assets/img/icons/emoji2.png" class="img-fluid">
                                        <span>Okay</span>
                                    </a>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <a class="fd-back-box text-center">
                                        <img src="assets/img/icons/emoji3.png" class="img-fluid">
                                        <span>Good</span>
                                    </a>
                                </div>
                                <div class="col-lg-12 mt-3 mb-4">
                                    <span class="fs-14 text-dark d-block fw-600 mb-2">Additional Feedback (optional)</span>
                                    <textarea class="form-control w-100 h-100"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-primary me-2 mb-2" data-bs-dismiss="modal">Submit</button>
                            <button type="button" class="btn btn-light me-2 mb-2" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->

            <!-- Modal -->
            <div class="modal fade rate-modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-start flex-column px-xl-4 px-md-2 mt-2">
                            <h3 class="d-block fs-18 mb-2">Before you close this ticket, we'd love to hear your thoughts.</h3>
                            <p>Help us improve by sharing what worked well and what didn’t.</p>

                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body px-xl-4 px-md-2 py-xl-0 py-lg-2">
                            <div class="row">

                                <div class="col-lg-12 mt-3 mb-2">
                                    <div class="summernote"></div>

                                </div>
                                <div class="col-lg-12 mt-0 mb-0">
                                    <div class="d-flex align-items-center ">
                                        <p class="me-2 fs-12"><i class="ti ti-x"></i></p>
                                        attached-file-name.pdf
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-end mt-4">

                            <button type="button" class="btn btn-light me-2 mb-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary me-2 mb-2" data-bs-dismiss="modal">Submit & Close Ticket</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->


        </div>
        <?php include 'includes/script.php'; ?>

    </div>


    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
</body>

</html>