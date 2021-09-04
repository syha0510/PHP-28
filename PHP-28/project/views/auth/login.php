<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="publics/vendors/feather/feather.css">
  <link rel="stylesheet" href="publics/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="publics/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="publics/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="publics/images/logo.jpg" />
</head>

<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="publics/images/logo.jpg" alt="logo">
              </div>
              <h4>Xin chào !!!</h4>
              <h6 class="font-weight-light">Đăng nhập để tiếp tục</h6>

              <form class="pt-3" action="?admin=auth&mod=auth&act=login" id="login"  method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Tên đăng nhập">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Mật khẩu">
                </div>

                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="button" >Đăng nhập</button>
                </div>

                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Nhớ mật khẩu
                    </label>
                  </div>
                  <a  href="#" class="auth-link text-black">Quên mật khẩu ?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Đăng nhập bằng Facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <!-- Don't have an account? <a href="register.html" class="text-primary">Create</a> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="publics/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="publics/js/off-canvas.js"></script>
  <script src="publics/js/hoverable-collapse.js"></script>
  <script src="publics/js/template.js"></script>
  <script src="publics/js/settings.js"></script>
  <script src="publics/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
