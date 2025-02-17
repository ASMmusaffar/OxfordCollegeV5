<?PHP
include('code.php');
include('userdata9.php');
if(!$_SESSION['main_user']){
  header("Location: ../index.php");
exit(0);
}
// include('excode.php');
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
    <link rel="manifest" href="manifest.json">
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard | OXFORD COLLEGE V4 | Code by Musaffar Industries</title>

    <meta name="description" content="" />

    <style>
      /* Styling for the toast */
.toast{
    animation: fadeout 900ms ease-in-out;
    position: fixed;
    bottom: 2vh;
    right: 1vw;
    width: 300px;
    color: #000;
    border-radius: 5px;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.9);
    display: block;
}
@keyframes fadeout {
  0%{
    bottom: -350px;
  }
  100%{
    bottom: 20px;
  }
}

/* Styling for the toast header */
.toast-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-right: 10px;
    padding-left: 10px;
    background-color: #000;
    font-weight: 900;
}

/* Styling for the close button */
.close-button{
    background: none;
    border: 0;
    color: red;
    font-size: 20px;
    cursor: pointer;
}

/* Styling for the toast body */
.toast-body{
    padding: 10px;
    margin-top: -20px;
}

    </style>
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
            <li class="menu-item active">
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
                <!-- Place this tag where you want the button to render. -->
                

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
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welcome to Oxford College Dashboard</h5>
                          <p class="mb-4">
                            Hello <?=$_SESSION['main_user']?>, system updated at <span class="fw-bold"><?=$fetchTime?></span>
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary" id="installButton">Install OXFORD ADMIN</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/logoes/oxf.png"
                            height="180"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">All Students</span>
                          <h3 class="card-title mb-2">###</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>Today Join ###</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">All Active Students</span>
                          <h3 class="card-title text-nowrap mb-1">###</h3>
                          <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> ###</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->



                <!-- EL Details -->
                <!-- <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h4 class="card-header m-0 me-2 pb-3 fw-bold">Elementary Level Details</h4>
                        <div class="px-2 mt-5">
                          <h6>Total Batches : ###</h6>
                          <h6>Total Running Batches : ###</h6>
                          <h6>Total Completed Batches : ###</h6>
                          <h6>Total Students  : ###</h6>
                          <h6>Total Active Students : ###</h6>
                          <h6>Total DropOut Students : ###</h6>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="dropdown">
                              <form action="" method="get">
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                  <option selected>EL Batch 1</option>
                                  <option value="1">EL Batch 2</option>
                                  <option value="1">EL Batch 3</option>
                                  <option value="1">EL Batch 4</option>
                                  <option value="1">EL Batch 5</option>
                                  <option value="1">EL Batch 6</option>
                                </select>
                              </form>
                            </div>
                          </div>
                        </div>
                        
                        <div class="text-center fw-semibold pt-3 mb-2">EL Batch # Details</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>All</small>
                              <h6 class="mb-0">###</h6>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-success p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>Active</small>
                              <h6 class="mb-0">###</h6>
                            </div>
                          </div>
                        </div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-danger p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>DropOuts</small>
                              <h6 class="mb-0">###</h6>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>Trnfrs</small>
                              <h6 class="mb-0">###</h6>
                            </div>
                          </div>
                        </div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>Starts On</small>
                              <h6 class="mb-0">###</h6>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>Status</small>
                              <h6 class="mb-0">###</h6>
                            </div>
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                </div> -->


                <!--/ More Info -->
                <!-- <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="d-block mb-1">EL</span>
                          <h3 class="card-title text-nowrap mb-2">###</h3>
                          <small class="text-success fw-semibold">Active Students</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">CE</span>
                          <h3 class="card-title mb-2">###</h3>
                          <small class="text-success fw-semibold">Active Students</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">CPE</span>
                          <h3 class="card-title mb-2">###</h3>
                          <small class="text-success fw-semibold">Active Students</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">CTE</span>
                          <h3 class="card-title mb-2">###</h3>
                          <small class="text-success fw-semibold">Active Students</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  -->
                <!-- here the stop  -->

              </div>
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2 fw-bolder">Batch Details </h5>
                        <!-- <small class="text-muted">42.82k Total Sales</small> -->
                      </div>
                      <!-- <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="orederStatistics"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                          <a class="dropdown-item" href="javascript:void(0);">More Details</a>
                        </div>
                      </div> -->
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                        <?PHP
                        // SQL query to get the row count
                        $sql3 = "SELECT COUNT(*) as total FROM batches WHERE batdatastatus='1' AND batstatus='active'";
                        $result3 = $con->query($sql3);
                    
                        // Check if the query was successful
                        if ($result3) {
                            // Fetch the result as an associative array
                            $row = $result3->fetch_assoc();
                    
                            // Get the row count from the "total" column
                            $rowCountX = $row['total'];
                            $idIndexBat=$rowCountX;
                            $idIndexMainBat=sprintf("%02d", $idIndexBat);
                            
                        } else {
                          $idIndexMainBat=0;
                        }
                        ?>
                          <h5 class="mb-2 mt-2">Currently <span class="fw-bold fs-3"><?=$idIndexMainBat?></span> Batches Running</h5>
                        </div>
                        <!-- <div id="orderStatisticsChart"></div> -->
                      </div>
                      <ul class="p-0 m-0">
         <!-- Php if contition with cousre count-->
         <?php 
                        
                        $query = "SELECT * FROM batches WHERE batdatastatus='1' ORDER BY batstart DESC ";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $bat)
                            {
                          ?>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"
                              ><i class="bx bx-label"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0"><?=$bat['batfcname']?></h6>
                              <small class="text-muted">Starts on <?=$bat['batstart']?></small>
                            </div>
                            <div class="user-progress">
                            <?PHP
                        // SQL query to get the row count
                        $batfcname=$bat['crscname'].'/'.$bat['batcname'].$bat['batno'];
                        $sql = "SELECT COUNT(*) as total FROM students WHERE stdatastatus='1' AND batfcname='$batfcname' AND ststatus='active'";
                        $result = $con->query($sql);
                    
                        // Check if the query was successful
                        if ($result) {
                            // Fetch the result as an associative array
                            $row = $result->fetch_assoc();
                    
                            // Get the row count from the "total" column
                            $rowCount = $row['total'];
                            $idIndex=$rowCount;
                            $idIndexMain=sprintf("%02d", $idIndex);
                            
                        } else {
                          $idIndexMain=0;
                        }
                        ?>
                              <small class="fw-semibold"><?=$idIndexMain?> Active Students</small>
                            </div>
                          </div>
                        </li>
                    <?PHP
                      }
                    }
                    else{
                    echo 'Batch Not Started Yet ';
                    }
                    ?>
          <!-- PHP End -->
                      </ul>
                    </div>
                  </div>
                </div>
            

                <div class="col-md-6 col-lg-8 mb-4">
                <form action="" method="post">
                  <div class="card h-100">
                    <div class="card-header">
                      <h5 class="m-0 me-2 fw-bolder">Unfinished Tasks
                        
                        <a
                           href="tasks.php" 
                           class="btn btn-primary float-end  ms-1">
                          <i class="bx bx-plus"></i>
                          New Task
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <form action="engine.php" method="post" enctype="multipart/form-data">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Description Of </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                            </div>
                          </div>
                        </div>

                      </h5>
                    </div>
                    <div class="card-body px-0" style="overflow: auto">
                    <table class="table">
                    <thead>
                      <tr>
                        <th>Task Code</th>
                        <th>Title</th>
                        <th>Task For</th>
                        <th>Complete (On/Bfr)</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php 
                        
                        $query = "SELECT * FROM tasks WHERE tsdatastatus=1 AND tsstatus='Un-Completed' ORDER BY no DESC ";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $ccr)
                            {
                                ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?=$ccr['tscode']?></strong></td>
                        <td><?=$ccr['tstitle']?></td>
                        <td><?=$ccr['tsto']?></td>
                        <td><?=$ccr['tsfdate']?></td>
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
                  </form>
                </div>

                <?PHP
                  if ($APImsgsts==1) { ?>

                    <div class="toast" id="toast">
                    <div class="toast-header">
                        <span class="toast-title"><?=$APImsghd?> <span class="badge rounded-pill bg-info mb-2"> <?=$APImsgtp?></span></span>
                        <button class="close-button" id="close-button">&times;</button>
                    </div>
                    <div class="toast-body">
                      <?=$APImsgbdy?>
                      <?PHP
                  if ($APImsglinsts==1) { ?>
                      <a class="btn btn-outline-dark mt-2" href="<?=$APImsglin?>" ><?=$APImsglinnm?></a>
                  <?PHP } ?>
                  
                    </div>
                </div>

                 <?PHP }
                ?>

              </div>
            </div>
            <!-- / Content -->

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
    
    
    <script>
      // JavaScript to show and hide the toast
const toast = document.getElementById('toast');
const closeButton = document.getElementById('close-button');

closeButton.addEventListener('click', () => {
    toast.style.display = 'none';
});

// Function to display the toast
function showToast() {
    toast.style.display = 'block';
    setTimeout(() => {
        toast.style.display = 'block';
    }, 5000); 
    // Hide the toast after 5 seconds (adjust as needed)
}
// Example usage: call showToast() to display the toast
showToast();

    </script>
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
          navigator.serviceWorker.register('service-worker.js').then(function(registration) {
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
          }, function(err) {
            console.log('ServiceWorker registration failed: ', err);
          });
        });
      }
    </script>
  </body>
</html>
