<?php require_once("views/client/header.php"); ?>


<!-- section main content -->
<section class="main-content">
<div class="container-xl">

  <div class="row gy-4">

    <div class="col-lg-8">

      <!-- post -->
      <?php foreach ($posts as $key => $value): ?>
        <div class="post post-classic rounded bordered">
          <div class="thumb top-rounded">

            <span class="post-format">
              <i class="icon-picture"></i>
            </span>
            <a href="?admin=admin&mod=post&act=detailpost&id=<?= $value['id'] ?>">
              <div class="inner">
                <img style="width:100%;height:450px;" src="publics/images/<?= $value['thumbnail']  ?>" alt="post-title">
              </div>
            </a>
          </div>
          <div class="details">
            <ul class="meta list-inline mb-0">

              <li class="list-inline-item"><?= date('d-m-Y',strtotime($value['created_at'])) ?></li>
            </ul>
            <h5 class="post-title mb-3 mt-3"><a href="blog-single.html"><?= $value['title'] ?></a></h5>
            <p class="excerpt mb-0"><?= $value['content'] ?></p>
          </div>
          <div class="post-bottom clearfix d-flex align-items-center">
            <div class="social-share me-auto">
              <button class="toggle-button icon-share"></button>
              <ul class="icons list-unstyled list-inline mb-0">
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
              </ul>
            </div>
            <div class="float-end d-none d-md-block">
              <a href="?admin=admin&mod=post&act=detailpost&id=<?= $value['id'] ?>" class="more-link">Xem thêm<i class="icon-arrow-right"></i></a>
            </div>
            <div class="more-button d-block d-md-none float-end">
              <a href="blog-single.html"><span class="icon-options"></span></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
    <div class="col-lg-4">

      <!-- sidebar -->
      <?php  require_once("views/client/sidebar.php"); ?>


    </div>

  </div>

</div>
</section>

<!-- instagram feed -->
<div class="instagram">
  <div class="container-xl">
    <!-- button -->
    <a href="https://www.facebook.com/ha2nd" class="btn btn-default btn-instagram">@Sỹ Hà </a>
    <!-- images -->
    <div class="instagram-feed d-flex flex-wrap">
      <?php foreach ($get6Post as $key => $value): ?>

          <div class="insta-item col-sm-2 col-6 col-md-2">
              <a href="?admin=admin&mod=post&act=detailpost&id=<?= $value['id'] ?>">
              <img style="width:181px;height:181px;" src="publics/images/<?= $value['thumbnail']  ?>" alt="insta-title">
              </a>
          </div>

      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php require_once("views/client/footer.php"); ?>
