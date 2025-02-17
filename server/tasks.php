<?PHP
include('dbcon.php');
include('code.php');
// include('excode.php');
if(!$_SESSION['main_user']){
  header("Location: ../index.php");
exit(0);
}
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Tasks | OXFORD COLLEGE V4 | Code by Musaffar Industries</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/oxf.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="../assets/vendor/js/helpers.js"></script><script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
              <img src="<?=$sysMainLogo?>" alt="" width="50px">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase"><?=$sysMainName?></span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
                    <!-- Courses -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Administration</span>
            </li>
            <li class="menu-item  ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">Staff</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="add-staff.php" class="menu-link">
                    <div data-i18n="Account">New Staff</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="edit-staff.php" class="menu-link">
                    <div data-i18n="Account">Edit Staff</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Account Settings">Student</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="add-student.php" class="menu-link">
                    <div data-i18n="Account">New Student</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="edit-student.php" class="menu-link">
                    <div data-i18n="Account">Edit Student</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="dropout-student.php" class="menu-link">
                    <div data-i18n="Account">DropOut</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="transfer-student.php" class="menu-link">
                    <div data-i18n="Account">Transfer</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-tag-alt"></i>
                <div data-i18n="Account Settings">Course</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="new-course.php" class="menu-link">
                    <div data-i18n="Account">New Course</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="edit-course.php" class="menu-link">
                    <div data-i18n="Account">Edit Course</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Account Settings">Batch</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="new-batch.php" class="menu-link">
                    <div data-i18n="Account">New Batch</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="edit-batch.php" class="menu-link">
                    <div data-i18n="Account">Edit Batch</div>
                  </a>
                </li>
              </ul>
            </li>
            
       
                    <!-- Dtls Staffs -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Details View</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">Staff</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="view-staff.php" class="menu-link">
                    <div data-i18n="Account">Overview</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Account Settings">Students</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="view-student.php" class="menu-link">
                    <div data-i18n="Account">Overview</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-tag-alt"></i>
                <div data-i18n="Account Settings">Course</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="view-course.php" class="menu-link">
                    <div data-i18n="Account">Overview</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Account Settings">Batch</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="View-batch.php" class="menu-link">
                    <div data-i18n="Account">Overview</div>
                  </a>
                </li>
              </ul>
            </li>
            
                    <!-- Docs -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Documents</span>
              <li class="menu-item">
                <a href="dropouts.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-user-x"></i>
                  <div data-i18n="Analytics">DropOuts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ccr.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-task-x"></i>
                  <div data-i18n="Analytics">CCR</div>
                </a>
              </li>
              <li class="menu-item active">
                <a href="tasks.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-calendar-plus"></i>
                  <div data-i18n="Analytics">Tasks</div>
                </a>
              </li>
            
            
       
                    <!-- Dashboard-->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Account</span>
            </li>
            <li class="menu-item">
              <a href="auth.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Analytics">Authentications</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="timeline.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-trip"></i>
                <div data-i18n="Analytics">Timeline</div>
              </a>
            </li>
       

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">System (Suite V4)</span>
            </li>
              <li class="menu-item">
                <a href="license.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-crown"></i>
                  <div data-i18n="Analytics">License</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="suite-update.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-hive"></i>
                  <div data-i18n="Analytics">Suite Update</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="user-agreement.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-check-shield"></i>
                  <div data-i18n="Analytics">User Agreement</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="privacy.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-error-alt"></i>
                  <div data-i18n="Analytics">Privacy</div>
                </a>
              </li>

            <!-- Components -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Musaffar-Industries</span>
            </li>
            <li class="menu-item">
              <a href="msg-from-ceo.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message"></i>
                <div data-i18n="Basic">Msg From CEO</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="about-us.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="Basic">About Us</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="partnership-program.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Partnership Program</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="scholarships.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-gift"></i>
                <div data-i18n="Basic">Student Scholarships</div>
              </a>
            </li>
            
            
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
              <a
                href="<?=$MrIndrsSupportLink?>"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="<?=$MrIndrsFeedbackLink?>"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Feedback</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <form action="search-student.php" method="post">
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search Student...."
                    aria-label="Search..."
                  />
                  </form>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?=$userAvatar?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?=$userAvatar?>" class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?=$userName?> [<?=$userCodeName?>]</span>
                            <small class="text-muted"><?=$userTitle?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <span class="dropdown-item">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle"><?=$userFullName?></span>
                      </span>
                      <span class="dropdown-item">
                        <i class="bx bx-id-card me-2"></i>
                        <span class="align-middle"><?=$userRegId?></span>
                      </span>
                      <span class="dropdown-item">
                        <i class="bx bx-purchase-tag me-2"></i>
                        <span class="align-middle"><?=$userPosition?></span>
                      </span>
                      <span class="dropdown-item">
                        <i class="bx bx-purchase-tag me-2"></i>
                        <span class="align-middle"><?=$userOtherPosition?></span>
                      </span>
                      <span class="dropdown-item">
                        <i class="bx bx-calendar-star me-2"></i>
                        <span class="align-middle"><?=$userJoinDate?></span>
                      </span>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item btn btn-outline-danger" href="" data-bs-toggle="modal"
                          data-bs-target="#modalLogOut">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

                        <!-- Modal -->
                        <div data-bs-backdrop="static" data-bs-keyboard="false" class="modal fade" id="modalLogOut" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <h4 class=" text-lg-center fw-bold">Are you sure you want to Logout!</h4>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  No
                                </button>
                                <a href="logout.php" type="button" class="btn btn-danger">Yes, Logout</a>
                              </div>
                            </div>
                          </div>
                        </div>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
<?php
include('preloader.php');
if (!is_server_online($serverUrl)) {
  include('data-error.php');
}
else{
?>
              <h4 class="fw-bold py-3 mb-4">Tasks</h4>
              <?php include('message.php'); ?>
              <div class="row">
                <div class="col-md-12">
                  <form method="POST" action="engine.php" enctype="multipart/form-data">
                  <div class="card mb-4">
                    <h5 class="card-header fw-bold">Add New Task</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="row">
                        <div class="mb-3 col-md-4">
                          <label class="form-label">Task Code</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tscode"
                            name="tscode"
                            maxlength="8"
                            required
                          />
                        </div>
                        <div class="mb-3 col-md-4">
                          <label class="form-label">Title</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tstitle"
                            name="tstitle"
                            required
                          />
                        </div>
                        <div class="mb-3 col-md-4">
                          <label class="form-label">Task From</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tsfrom"
                            name="tsfrom"
                            value="<?=$userRegId?>"
                            readonly
                          />
                        </div>
                        <div class="mb-3 col-md-4">
                          <label class="form-label">Task For</label>
                          <select id="tsto" name="tsto" class="select2 form-select" required>
                            <option value="">Select Staff</option>
                          <?PHP
                            $query2 = "SELECT * FROM staffs WHERE sfdatastatus='1' AND sfstatus='active'  ";
                            $query_run2 = mysqli_query($con, $query2);
                            if(mysqli_num_rows($query_run2) > 0)
                            {
                                foreach($query_run2 as $staff)
                                {
                                    ?>
                              <option value="<?=$staff['sfregid']?>"><?=$staff['sfregid']?> [<?=$staff['sfcname']?>]</option>
                              <?PHP
                                }
                            }
                            else{
                              ?>
                              <option value="">No Data For Select</option>
                              <?PHP
                            }  
                            ?>
                          </select>
                        </div>
                        <div class="mb-3 col-md-4">
                          <label class="form-label">START(S)/(ED) ON</label>
                          <input
                            class="form-control"
                            type="date"
                            id="tssdate"
                            name="tssdate"
                            required
                          />
                        </div>
                        <div class="mb-3 col-md-4">
                          <label class="form-label">FINISH ON / BEFORE</label>
                          <input
                            class="form-control"
                            type="date"
                            id="tsfdate"
                            name="tsfdate"
                            required
                          />
                        </div>
                        <!-- <div class="mb-3 col-md-6">
                          <label class="form-label">Description</label>
                          <input
                            class="form-control"
                            type="text"
                            id="ccrdesc"
                            name="ccrdesc"
                            required
                          />
                        </div> -->
                        <div class="mb-3 col-md-12">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Description</label>
                                    <textarea
                                      name="tsdesc" 
                                      class="form-control" 
                                      id="exampleFormControlTextarea1" 
                                      rows="3"
                                      placeholder="Write The details Of The Task"></textarea>
                                  </div>
                                </div>
                        <div class="mb-3 col-md-2">
                          <input
                            class="form-control"
                            type="hidden"
                            id="ccraddby"
                            name="ccraddby"
                            value="<?=$userRegId?>"
                          />
                        </div>
                        <div class=" float-end">
                          <button type="reset" class="btn btn-outline-secondary">Reset</button>
                          <button type="submit" name="task_submit" class="btn btn-primary me-2">Create Task</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              


                
                <div class="card">
                <h5 class="card-header fw-bold">Tasks For You
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class=" text-center">
                        <th>Task Code</th>
                        <th>Title</th>
                        <th>Task From</th>
                        <th>Task Duration</th>
                        <th>Description</th>
                        <th>Remark or Report</th>
                        <th>Mark</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php 
                        
                        $query = "SELECT * FROM tasks WHERE tsdatastatus=1 AND tsto='$userRegId' ORDER BY no DESC ";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $ccr)
                            {
                                ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?=$ccr['tscode']?></strong></td>
                        <td><?=$ccr['tstitle']?></td>
                        <td><?=$ccr['tsfrom']?></td>
                        <td><?=$ccr['tssdate']?> to <?=$ccr['tsfdate']?></td>
                        <td>
                          <a
                          data-bs-toggle="tooltip"
                          data-bs-offset="0,4"
                          data-bs-placement="bottom"
                          data-bs-html="true"
                          title="<?=$ccr['tsdesc']?>"
                        ><center>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAftJREFUSEu11UnIjXEUx/HPKxkixc4QyoIipFgpVjIkIcMCpSSJWMgCGcJKUqaSBaHEQjJGWciwkymSOdkqUoYInTo393167nPf99Z9Vs997vn/v+d/zu/8/h3a/HS0eX/NAL2xEDMxASPxF+/xCNdxAb8aJVoFmIWjuWnVQV9jDW6VBTUC7MSOXPAB53AVj/PbRMzFYgzLb5uwvwgpA9Q2/4pluJxlKUuwBxbhBPpiAw7WBxYBkdUlfMdkPOuiCKbgHgI4DXdr6+oB/fESg7EcZ0o2jwbHU3byjTiAFxhfa3x94FocwXOMa1CWKkCvVFckOB8Xi5lcQyhnXYK6WJ1OYXuxBcexugj4iKEYhbet7I6puIOHmFQEfEslhBp+NABUlSiWDMInfMbAIiBkGY0egHgve5oBYu2XXB/vndQQ3R+dCnjaIiDK8iCFMrYIOIul2Ix9LQK2YTdOY0URENo/hVcYgz/dnIOeeIPhWILzRUA0N8oUAStxspuA9WkTMawxaD/LJnIGbrRgFWEr99MqpqdUG478VuxJNYTZXamYifCeKEcMVj/EKQ5XmV3tv+3YlT/epV3HpD9BWEJYybx00iFpK+Gkh4rJVF04c3Asp7tqsOPCWYXbZUHNrsw+WIDZ2bgRmW2oJfR+M03td6MMmgFatKT/y9oO+Ac67mgZjO+ygAAAAABJRU5ErkJggg=="/>
                        </center></a>
                        </td>
                        
                          <?PHP
                            if($ccr['tsstatus']=='Un-Completed'){
                          ?>
                          <form action="engine.php" method="post">
                        <td>
                          <textarea name="tsrmrk" class=" form-control" cols="25" rows="1" required></textarea>
                        </td>
                        <td>
                            <input type="hidden" name="no" value="<?=$ccr['no']?>">
                            <input type="hidden" name="sfregid" value="<?=$userRegId?>">
                            <input type="hidden" name="tscode" value="<?=$ccr['tscode']?>">
                            <button type="submit" name="tsk_finished" class="btn btn-outline-success"><i class='bx bx-check'></i></button>
                        </td>
                        </form>
                          <?PHP
                            }
                            else{
                              ?>
                            <td>
                            <a
                          data-bs-toggle="tooltip"
                          data-bs-offset="0,4"
                          data-bs-placement="bottom"
                          data-bs-html="true"
                          title="<?=$ccr['tsrmrk']?>"
                        ><center>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAj1JREFUSEu11cvLjWsYBvDfp+1Q24QQUUSkFH/AdkyOA+R8yIzamwxMDAyNmClEycChCJmIJCnHlAEGBg4hOWTTppQcCl163q/1vda310LuWrV6nue+rvu+7sPb4Tdbx2/G14pgAGZiNiZgBL7gEW7iDM7iv+4C7Y5gHHZgWhsZhvAc1uF+/X0zguU4iD/wHkdwvET6qQD0LJktxTL0xgcswqlGkjpBpMiDHjiK9XjVIotB2It5SACTca3yaSToi7sYgj34pw15+hf9E1CyXok7GI+P8W8k2IRtuIpJ+NyCYCguYj+2oA9uYCxW41Cd4FZhnooLbYDnzSjcK36p15IibbprTp3gLSLTn3jXQJDMEuWLcpbIK/B0TTR/Xu4Gl/8vkdp0kehfDCwXeRBL6+0qfR/ZYpcxHA/xVwN47vqVmrxG6tOFIL08vfzOF7AU/FKRIoBpz2F4gCl4UpNybunCK5hYJ/gbu8vQzGhwDGBIMsWxTHGyqYOH/HqZ+A3YWSfoVSKLxhuxvQlJjpqBp00PYBWeYXRVx/qgpWCRKtFkVWwtDgGO7lkLj2uyVHNTDdoCnK7eNFsVi3G4rIrMwknEqdGyGmZhBRYi2T8tayP6d1p3y25kySBFq6TMAjyBMTWyTOw+bMab2l3LdR1JYmtKuybyAKbQt4ucx1C1dR2/bYLKMeO/tmzZ78CaHbT64FQZZA0E+Nt++RFrhyDbcX7Zkj+C3Vm8/3NK8fJNSAY/Za0y+CnQdtr0l4ErgK+ukHkZ0hyPVwAAAABJRU5ErkJggg=="/>
                         </center></a>
                            </td>
                            <td>
                              <span class="btn btn-success"><i class='bx bx-check'></i></span>
                            </td>
                              <?PHP
                            }
                          ?>
                        
                      </tr>
                      <?php
                            }
                        }
                        else{
                        echo '<tr><td colspan="7" rowspan="2" class="text-center mt-2 mb-2"> No Tasks Found </td></tr>';
                        }
                        ?>

                    </tbody>
                  </table>
                </div>
              </div>

                <div class="card mt-5">
                <h5 class="card-header fw-bold">All Tasks
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class=" text-center">
                        <th>Task Code</th>
                        <th>Title</th>
                        <th>Task From</th>
                        <th>Task For</th>
                        <th>Task Duration</th>
                        <th>Description</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php 
                        
                        $query = "SELECT * FROM tasks WHERE tsdatastatus=1 ORDER BY no DESC ";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $ccr)
                            {
                                ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?=$ccr['tscode']?></strong></td>
                        <td><?=$ccr['tstitle']?></td>
                        <td><?=$ccr['tsfrom']?></td>
                        <td><?=$ccr['tsto']?></td>
                        <td><?=$ccr['tssdate']?> to <?=$ccr['tsfdate']?></td>
                        <td>
                        <a
                        data-bs-toggle="tooltip"
                        data-bs-offset="0,4"
                        data-bs-placement="bottom"
                        data-bs-html="true"
                        title="<?=$ccr['tsdesc']?>"
                      ><center>
                      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAftJREFUSEu11UnIjXEUx/HPKxkixc4QyoIipFgpVjIkIcMCpSSJWMgCGcJKUqaSBaHEQjJGWciwkymSOdkqUoYInTo393167nPf99Z9Vs997vn/v+d/zu/8/h3a/HS0eX/NAL2xEDMxASPxF+/xCNdxAb8aJVoFmIWjuWnVQV9jDW6VBTUC7MSOXPAB53AVj/PbRMzFYgzLb5uwvwgpA9Q2/4pluJxlKUuwBxbhBPpiAw7WBxYBkdUlfMdkPOuiCKbgHgI4DXdr6+oB/fESg7EcZ0o2jwbHU3byjTiAFxhfa3x94FocwXOMa1CWKkCvVFckOB8Xi5lcQyhnXYK6WJ1OYXuxBcexugj4iKEYhbet7I6puIOHmFQEfEslhBp+NABUlSiWDMInfMbAIiBkGY0egHgve5oBYu2XXB/vndQQ3R+dCnjaIiDK8iCFMrYIOIul2Ix9LQK2YTdOY0URENo/hVcYgz/dnIOeeIPhWILzRUA0N8oUAStxspuA9WkTMawxaD/LJnIGbrRgFWEr99MqpqdUG478VuxJNYTZXamYifCeKEcMVj/EKQ5XmV3tv+3YlT/epV3HpD9BWEJYybx00iFpK+Gkh4rJVF04c3Asp7tqsOPCWYXbZUHNrsw+WIDZ2bgRmW2oJfR+M03td6MMmgFatKT/y9oO+Ac67mgZjO+ygAAAAABJRU5ErkJggg=="/>
                      </center></a>
                      <a
                          data-bs-toggle="tooltip"
                          data-bs-offset="0,4"
                          data-bs-placement="bottom"
                          data-bs-html="true"
                          title="<?=$ccr['tsrmrk']?>"
                          class=" mt-1"
                        ><center>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAj1JREFUSEu11cvLjWsYBvDfp+1Q24QQUUSkFH/AdkyOA+R8yIzamwxMDAyNmClEycChCJmIJCnHlAEGBg4hOWTTppQcCl163q/1vda310LuWrV6nue+rvu+7sPb4Tdbx2/G14pgAGZiNiZgBL7gEW7iDM7iv+4C7Y5gHHZgWhsZhvAc1uF+/X0zguU4iD/wHkdwvET6qQD0LJktxTL0xgcswqlGkjpBpMiDHjiK9XjVIotB2It5SACTca3yaSToi7sYgj34pw15+hf9E1CyXok7GI+P8W8k2IRtuIpJ+NyCYCguYj+2oA9uYCxW41Cd4FZhnooLbYDnzSjcK36p15IibbprTp3gLSLTn3jXQJDMEuWLcpbIK/B0TTR/Xu4Gl/8vkdp0kehfDCwXeRBL6+0qfR/ZYpcxHA/xVwN47vqVmrxG6tOFIL08vfzOF7AU/FKRIoBpz2F4gCl4UpNybunCK5hYJ/gbu8vQzGhwDGBIMsWxTHGyqYOH/HqZ+A3YWSfoVSKLxhuxvQlJjpqBp00PYBWeYXRVx/qgpWCRKtFkVWwtDgGO7lkLj2uyVHNTDdoCnK7eNFsVi3G4rIrMwknEqdGyGmZhBRYi2T8tayP6d1p3y25kySBFq6TMAjyBMTWyTOw+bMab2l3LdR1JYmtKuybyAKbQt4ucx1C1dR2/bYLKMeO/tmzZ78CaHbT64FQZZA0E+Nt++RFrhyDbcX7Zkj+C3Vm8/3NK8fJNSAY/Za0y+CnQdtr0l4ErgK+ukHkZ0hyPVwAAAABJRU5ErkJggg=="/>
                         </center></a>
                      </td>
                        <td><?=$ccr['tsstatus']?></td>
                      </tr>
                      <?php
                            }
                        }
                        else{
                        echo '<tr><td colspan="7" rowspan="2" class="text-center mt-2 mb-2"> No Tasks Found </td></tr>';
                        }
                        ?>

                    </tbody>
                  </table>
                </div>
              </div>
<?PHP
}
?>
            
            

            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="footer">
              <div class="text-center">  
                  <p class="copyright justify-content-end" style="color: #000;font-weight: 800;">&copy 2023 | Powered by <img style="width: 25px;" src="../assets/img/logoes/mrindrs.png" class="img-fluid"/>
                    <a href="http://musaffarindrs.atwebpages.com" target="_blank" style="color: #dc203d;font-weight: 800;">Musaffar Industries</a> | All Rights Reserved
                  </p>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    

    
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>


  </body>
</html>
