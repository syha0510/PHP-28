<div class="sidebar">
  <!-- widget about -->

  <!-- widget popular posts -->
  <div class="widget rounded">
    <div class="widget-header text-center">
      <h3 class="widget-title">Bài viết hay</h3>
      <img src="publics/loadcate/fonts/wave.svg" class="wave" alt="wave">
    </div>
    <div class="widget-content">
      <!-- post -->
      <?php foreach ($random as $key => $value): ?>
        <div class="post post-list-sm circle">
          <div class="thumb circle">
            <span class="number"><?= count ($value) ?></span>
            <a href="?admin=admin&mod=post&act=detailpost&id=<?= $value['id'] ?>">
              <div class="inner">
                <img style="width:60px;height:60px;" src="publics/images/<?= $value['thumbnail']  ?>" alt="post-title">
              </div>
            </a>
          </div>
          <div class="details clearfix">
            <h6 class="post-title my-0"><a href="?admin=admin&mod=post&act=detailpost&id=<?= $value['id'] ?>"><?= $value['title']  ?></a></h6>
            <ul class="meta list-inline mt-1 mb-0">
              <li class="list-inline-item"><?= date('d-m-Y',strtotime($value['created_at'])) ?></li>
            </ul>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  <!-- widget categories -->
  <div class="widget rounded">
    <div class="widget-header text-center">
      <h3 class="widget-title">Danh mục</h3>
      <img src="publics/loadcate/fonts/wave.svg" class="wave" alt="wave">
    </div>
    <div class="widget-content">
      <ul class="list">
        <?php foreach ($categories as $key => $value): ?>
          <li><a href="?admin=admin&mod=post&act=getCategory&id=<?= $value['id'] ?>"><?= $value['name']  ?></a><span></span></li>
        <?php endforeach; ?>
      </ul>
    </div>

  </div>

</div>
