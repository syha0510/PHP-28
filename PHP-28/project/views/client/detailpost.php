<?php require_once("views/client/header.php"); ?>
<section class="main-content mt-3">
  <div class="container-xl">



    <div class="row gy-4">

      <div class="col-lg-8">
        <!-- post single -->
                  <div class="post post-single">
          <!-- post header -->
          <div class="post-header">
            <h1  class="title mt-0 mb-3"><?= $post['title']  ?></h1>
            <ul class="meta list-inline mb-0">

              <li class="list-inline-item"><?= date('d-m-Y',strtotime($post['created_at'])) ?></li>
            </ul>
          </div>
          <!-- featured image -->
          <div class="featured-image">
            <img style="width:100%;height:400px" src="publics/images/<?= $post['thumbnail']  ?>" alt="post-title">
          </div>
          <!-- post content -->
          <div class="post-content clearfix">
            <p style="font-weight:bold;"><?= $post['content']  ?></p>

            <p><?= $post['description']  ?></p>

          </div>
          <!-- post bottom section -->
          <div class="post-bottom">
            <div class="row d-flex align-items-center">
              <div class="col-md-6 col-12 text-center text-md-start">
                <!-- tags -->
                <a href="#" class="tag">#Trending</a>
                <a href="#" class="tag">#Video</a>
                <a href="#" class="tag">#Featured</a>
              </div>
              <div class="col-md-6 col-12">
                <!-- social icons -->
                <ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
                  <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

                  </div>

        <div class="spacer" data-height="50"></div>



        <div class="spacer" data-height="50"></div>

        <div class="spacer" data-height="50"></div>


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
    <a href="#" class="btn btn-default btn-instagram">@Sỹ Hà </a>
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
