<?php
require_once("header.php");
?>
<!-- content2 -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Xin chào <?= $_SESSION['auth']['name']  ?></h3>

          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">

           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">
            <img src="publics/images/dashboard/people.svg" alt="people">
            <div class="weather-info">
              <div class="d-flex">
                <div>
                  <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>28<sup>C</sup></h2>
                </div>
                <div class="ml-2">
                  <h4 class="location font-weight-normal">Hà Nội</h4>
                  <h6 class="font-weight-normal">Việt Nam</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div  class="card-body">
                <p  class="mb-4">Bài viết</p>
                <p class="fs-30 mb-2"><?= count($posts)  ?></p>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Danh mục</p>
                <p class="fs-30 mb-2"><?= count($categories)  ?></p>
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Người dùng </p>
                <p class="fs-30 mb-2"><?= count($users)  ?></p>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Đang hoạt động </p>
                <p class="fs-30 mb-2">1</p>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



</div>
<?php
require_once("footer.php");
 ?>
