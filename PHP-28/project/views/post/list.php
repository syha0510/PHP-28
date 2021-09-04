
<?php
require_once('views/admin/header.php');

?>


<div class="container">


      <?php
     if(isset($_COOKIE['success'])){
         ?>
         <div class="alert alert-success" style="margin-top:20px;"><?= $_COOKIE['success']; ?></div>
     <?php } ?>
     <?php
     if(isset($_COOKIE['error'])){
         ?>
         <div class="alert alert-error"><?= $_COOKIE['error']; ?></div>
     <?php } ?>
    <table class="table">
        <thead>
            <th>STT</th>
            <th>Tiêu đề</th>
            <th>Ảnh mô tả</th>
            <th>Hành động</th>

        </thead>
      <?php
      foreach ($posts as $key => $value) {
       ?>
        <tr>
            <td><?= $key+1  ?></td>
            <td><?= $value['title'] ?></td>
            <td>
                <img src="publics/images/<?= $value['thumbnail'] ?>" width="100px" height="100px">
            </td>


            <td>
                <a href="?admin=admin&mod=post&act=detailpost&id=<?= $value['id']  ?>" class="btn btn-primary"><i class="far fa-eye"></i></a>
                <?php if ($value['user_id']==$_SESSION['auth']['id']): ?>
                  <a href="?admin=admin&mod=post&act=edit&id=<?= $value['id']  ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                  <a href="?admin=admin&mod=post&act=delete&id=<?= $value['id']  ?>" onclick="return confirm('Bạn có muốn xóa ?')" id="btn" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                <?php endif; ?>



            </td

        </tr>
      <?php } ?>
    </table>
</div>


 <?php require('views/admin/footer.php') ?>
