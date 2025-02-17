<?PHP
include('code.php');
include('userdata9.php');
include('primus-engine.php');
// include('excode.php');
if(!$_SESSION['main_user']){
  header("Location: ../index.php");
exit(0);
}

if(!$_GET['steditid']){
  $_SESSION['message'] = "You can't access Edit-Student-Information page until select a student from student details table";
  $_SESSION['messagetype'] = "alert-warning";
  header("Location: edit-student.php");
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

    <title>Edit Select Student | OXFORD COLLEGE V4 | Code by Musaffar Industries</title>

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
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">Staff</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
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
            <li class="menu-item  active open">
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
                <li class="menu-item active">
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
              <li class="menu-item">
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
                  <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
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
                      <a class="dropdown-item btn btn-outline-danger" href="#" data-bs-toggle="modal"
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
          <div class="container-xxl flex-grow-1 container-p-y">
<?php
include('preloader.php');
if (!is_server_online($serverUrl)) {
  include('data-error.php');
}
else{
?>

              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Student /</span> Edit Student's Data</h4>
              <?php include('message.php'); ?>
              <div class="row">
                <div class="col-md-12">
<?php
// Assuming you have a table named 'target_data' with fields 'id', 'name', and 'description'
require('dbcon.php');
if (isset($_GET['steditid'])) {
  $stEditIdGet=$_GET['steditid'];
  $sql = "SELECT * FROM students WHERE no='$stEditIdGet'";
  $result = $con->query($sql);
  if ($result === false) {
    echo "Error executing the query: " . mysqli_error($con);
  } 
  else {
    $num_rows = $result->num_rows;
    if ($result->num_rows > 0) {
      $staffs = mysqli_fetch_array($result);

?>
                  <form method="POST" action="engine.php" enctype="multipart/form-data">
                  <div class="card mb-4">
                    <h5 class="card-header">Student Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="upload/stnd-img/<?=$staffs['stimg']?>"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Select New Image</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              name="stimg"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg, image/jpg"
                            />
                            <input
                              type="text"
                              name="stimgdata"
                              class="account-file-input"
                              hidden
                              value="<?=$staffs['stimg']?>"
                            />
                            <input
                              type="text"
                              name="no"
                              class="account-file-input"
                              hidden
                              value="<?=$staffs['no']?>"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Restore Image</span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                        <div class="mb-3 col-md-3">
                          <label class="form-label">Registration No</label>
                          <input
                              class="form-control"
                              type="text"
                              id="stregno"
                              name="stregno"
                              value="<?=$staffs['stregno']?>"
                              readonly
                            />
                        </div>
                        <div class="mb-3 col-md-3">
                          <label class="form-label">Batch Code</label>
                          <input
                              class="form-control"
                              type="text"
                              id="batfcname"
                              name="batfcname"
                              value="<?=$staffs['batfcname']?>"
                              readonly
                            />
                        </div>
                          <div class="mb-3 col-md-3">
                            <label for="email" class="form-label">Full Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="stnamef"
                              name="stnamef"
                              value="<?=$staffs['stnamef']?>"
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-3">
                            <label for="email" class="form-label">Name With Initial</label>
                            <input
                              class="form-control"
                              type="text"
                              id="stnameini"
                              name="stnameini"
                              value="<?=$staffs['stnameini']?>"
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-9">
                            <label for="address" class="form-label">Address</label>
                            <input required type="text" class="form-control" id="stattr" name="stattr" value="<?=$staffs['stattr']?>" />
                          </div>
                          <div class="mb-3 col-md-3">
                            <label for="state" class="form-label">Date Of Birth</label>
                            <input class="form-control" type="date" id="stdob" name="stdob" value="<?=$staffs['stdob']?>"  required/>
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="language" class="form-label">Gender</label>
                            <select id="stgen" name="stgen" class="select2 form-select" required>
                            <option value="M"
                                <?PHP
                                  if($staffs['stgen']=='M'){
                                    echo 'selected';
                                  }
                                ?>>Male</option>
                              <option value="F"
                              <?PHP
                                  if($staffs['stgen']=='F'){
                                    echo 'selected';
                                  }
                                ?>>Female</option>
                              <option value="R"
                              <?PHP
                                  if($staffs['stgen']=='R'){
                                    echo 'selected';
                                  }
                                ?>>Rather Not Say</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">NIC</label>
                            <input
                              type="text"
                              class="form-control"
                              id="stnic"
                              name="stnic"
                              value="<?=$staffs['stnic']?>"
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">E-mail</label>
                            <input
                              type="email"
                              class="form-control"
                              id="stmail"
                              name="stmail"
                              value="<?=$staffs['stmail']?>"
                              required
                            />
                          </div>
                        </div>
                      </div>
                    </div>




                    <div class="card mb-4">
                      <h5 class="card-header">Education Details</h5>
                      <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Name of University / School</label>
                            <input
                              class="form-control"
                              type="text"
                              id="steducen"
                              name="steducen"
                              value="<?=$staffs['steducen']?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Year</label>
                            <input
                              class="form-control"
                              type="text"
                              id="steduyear"
                              name="steduyear"
                              value="<?=$staffs['steduyear']?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="address" class="form-label">Course / Grade</label>
                            <input  type="text" class="form-control" id="stedugrade" name="stedugrade" value="<?=$staffs['stedugrade']?>" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card mb-3">
                      <h5 class="card-header">Parent / Guardian Details</h5>
                      <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-3">
                            <label for="email" class="form-label">Name with Initial</label>
                            <input
                              class="form-control"
                              type="text"
                              id="pstnameini"
                              name="pstnameini"
                              value="<?=$staffs['pstnameini']?>"
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-3">
                            <label for="email" class="form-label">Occupation</label>
                            <input
                              class="form-control"
                              type="text"
                              id="pstoccu"
                              name="pstoccu"
                              value="<?=$staffs['pstoccu']?>"
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-3">
                            <label class="form-label" for="phoneNumber">Contact Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">+94</span>
                              <input
                                type="number"
                                id="pstmob"
                                name="pstmob"
                                class="form-control"
                                value="<?=$staffs['pstmob']?>"
                                maxlength="9"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-3">
                            <label class="form-label" for="phoneNumber">Whatsapp Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">+94</span>
                              <input
                                type="number"
                                id="pstwa"
                                name="pstwa"
                                class="form-control"
                                value="<?=$staffs['pstwa']?>"
                                maxlength="9"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    


                    <div class="card mb-3">
                      <h5 class="card-header">Other Details</h5>
                      <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Date of Join</label>
                            <input
                              class="form-control"
                              type="date"
                              id="stjdate"
                              name="stjdate"
                              value="<?=$staffs['stjdate']?>"
                              require
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Admission Fee</label>
                            <input
                              class="form-control"
                              type="number"
                              id="stadmfee"
                              name="stadmfee"
                              value="<?=$staffs['stadmfee']?>"
                              required
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="language" class="form-label">Role</label>
                            <select id="strole" name="strole" class="select2 form-select" required>
                              <option value="student"
                                <?PHP
                                  if($staffs['strole']=='student'){
                                    echo 'selected';
                                  }
                                ?>
                              >Student</option>
                              <option value="coordinator"
                                <?PHP
                                  if($staffs['strole']=='coordinator'){
                                    echo 'selected';
                                  }
                                ?>
                              >Coordinator</option>
                              <option value="vice-coordinator"
                                <?PHP
                                  if($staffs['strole']=='vice-coordinator'){
                                    echo 'selected';
                                  }
                                ?>
                              >Vice Coordinator</option>

                            </select>
                          </div>
                          <div class="mt-4 float-end">
                          <input
                              class="form-control"
                              type="hidden"
                              id="staddby"
                              name="staddby"
                              value="<?=$userRegId?>"
                            />
                            <button type="reset" class="btn btn-outline-secondary">Restore</button>
                            <button type="submit" name="student_update" class="btn btn-primary me-2">Update Student Data</button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div></form>
                </div>
              </div>

              <div class="card mt-3">
                <h5 class="card-header">Transfer</h5>
                <div class="card-body">
                <form id="formAccountDeactivation" action="engine.php" method="POST">
                <div class="row">
                  
                    <div class="mb-3 col-md-4">
                      <label for="email" class="form-label">Transfer Date</label>
                      <input
                        class="form-control"
                        type="date"
                        id="sttransdate"
                        name="sttransdate"
                        required
                      />
                    </div>
                    <div class="mb-3 col-md-4">
                      <label for="email" class="form-label">Transfer From</label>
                      <input
                        class="form-control"
                        type="text"
                        id="sttransfrom"
                        name="sttransfrom"
                        value="<?=$staffs['batfcname']?>"
                        readonly
                      />
                    </div>
                    <div class="mb-3 col-md-4">
                      <label for="email" class="form-label">Transfer To</label>
                      <select name="sttransto" class="select2 form-select" required>
                        <option value="">Select Course & Batch</option>
                            <?PHP
                          $batfcname=$staffs['batfcname'];
                          $query3 = "SELECT * FROM batches WHERE batdatastatus='1' AND batstatus='active' AND batfcname!='$batfcname' ORDER BY batfcname DESC ";
                          $query_run3 = mysqli_query($con, $query3);
                          if(mysqli_num_rows($query_run3) > 0)
                          {
                              foreach($query_run3 as $staff)
                              {
                                  ?>
                            <option value="<?=$staff['batfcname']?>"><?=$staff['batfcname']?></option>
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
                    <div class="mb-3 col-md-12">
                          <label class="form-label">Transfer Reason</label>
                          <textarea class="form-control"
                            id="sttransreason"
                            name="sttransreason"
                            placeholder="You can describe about Reason Here"
                            required cols="30" rows="6"></textarea>
                        </div>
                        <div class="mb-1 col-12">
                          <div class="alert alert-warning">
                            <h6 class="alert-heading fw-bold mb-1">Are you sure you want to transfer this student?</h6>
                          </div>
                        </div>
                        <div class="col-12 mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="just"
                            id="just"
                            required
                          />
                          <input
                              class="form-control"
                              type="hidden"
                              id="sttransby"
                              name="sttransby"
                              value="<?=$userRegId?>"
                            />
                          <input
                            class="form-input"
                            type="hidden"
                            name="batfcname"
                            value="<?=$staffs['batfcname']?>"
                          />
                          <input
                            class="form-input"
                            type="hidden"
                            name="stnameini"
                            value="<?=$staffs['stnameini']?>"
                          />
                          <input
                            class="form-input"
                            type="hidden"
                            name="stregno"
                            value="<?=$staffs['stregno']?>"
                          />
                          <input
                            class="form-input"
                            type="hidden"
                            name="no"
                            value="<?=$staffs['no']?>"
                          />
                          <label class="form-check-label" for="accountActivation">Yes, I understood about this process</label>
                        </div>
                    <div class="mt-4 float-end">
                      <button type="reset" class="btn btn-outline-secondary">Reset</button>
                      <button type="submit" name="sttransdata" class="btn btn-warning deactivate-account">Transfer</button>
                    </div>
                </div>
                </form>
                </div>
              </div>

              <div class="card mt-3">
                <h5 class="card-header">DropOut</h5>
                <div class="card-body">
                  <form id="formAccountDeactivation" action="dropout-student.php" method="POST">
                    <input type="hidden" name="stnamef" value="<?=$staffs['stnamef']?>">
                    <input type="hidden" name="stregno" value="<?=$staffs['stregno']?>">
                    <input type="hidden" name="no" value="<?=$staffs['no']?>">
                    <button type="submit" name="stdrp" class="btn btn-danger deactivate-account">Continue To DropOut</button>
                  </form>
                </div>
              </div>

<?php
    }
    else{
      echo 'No Record Found';
    }
  }
}
else{
?>

<center>
<svg class="mt-5" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" style="fill: rgba(255, 1, 1, 1);transform: ;msFilter:;"><path d="M11.001 10h2v5h-2zM11 16h2v2h-2z"></path><path d="M13.768 4.2C13.42 3.545 12.742 3.138 12 3.138s-1.42.407-1.768 1.063L2.894 18.064a1.986 1.986 0 0 0 .054 1.968A1.984 1.984 0 0 0 4.661 21h14.678c.708 0 1.349-.362 1.714-.968a1.989 1.989 0 0 0 .054-1.968L13.768 4.2zM4.661 19 12 5.137 19.344 19H4.661z"></path></svg>
<h6 class=" text-center fw-bold">Select the staff from view staff details page</h6>
</center>
<?PHP  
}
}
?>

            </div>

            <!-- Footer -->
            <footer class="footer">
              <?= $Attribute ?>
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
    <script>
    'use strict';

document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    const deactivateAcc = document.querySelector('#formAccountDeactivation');

    // Update/reset user image of account page
    let accountUserImage = document.getElementById('uploadedAvatar');
    const fileInput = document.querySelector('.account-file-input'),
      resetFileInput = document.querySelector('.account-image-reset');

    if (accountUserImage) {
      const resetImage = accountUserImage.src;
      fileInput.onchange = () => {
        if (fileInput.files[0]) {
          accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
        }
      };
      resetFileInput.onclick = () => {
        fileInput.value = '';
        accountUserImage.src = resetImage;
      };
    }
  })();
});
    </script>

  </body>
</html>
