<?PHP
session_start();
// require 'server/code.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>OXFORD Login Page | Code by Musaffar Industries</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/oxf.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <script src="assets/vendor/js/helpers.js"></script><script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-l">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <div class="card">
            <div class="card-body">
            <div class="mt-1">
                <?php include('server/message.php'); ?>
              </div>
            <h5 class="mb-3 text-center fw-bold">OXFORD DATABASE SYSTEM</h5>
              <div class="app-brand justify-content-center">
                  <span class="app-brand-logo demo">
                    <img src="assets/img/logoes/oxf.png" width="190px">
                  </span>
              </div>
              <form autocomplete="off" id="formAuthentication" class="mb-3" action="server/login-engin.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">User Code Id</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="name_login"
                    placeholder="Enter your code id"
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">User Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="pass_login"
                      placeholder="******"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" name="login" type="submit">Log in</button>
                </div>
              </form>
              <p class="text-center">
                <span>If You Forgot Your Id or Password, Please Contact Your System Administrator</span>
              </p>
              
            </div>
          </div>
          <div class="text-center mt-3 footer" style="font-size: 13px;">  
            <p class="copyright justify-content-end" style="color: #000;font-weight: 800;">&copy 2023 | Powered by <img style="width: 20px;" src="assets/img/logoes/mrindrs.png" class="img-fluid"/>
              <a href="'.$MrIndrsWebLink.'" target="_blank" style="color: #dc203d;font-weight: 800;">Musaffar Industries</a> | All Rights Reserved
            </p>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <script src="assets/js/main.js"></script>

  </body>
</html>
