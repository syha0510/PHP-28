<?php require_once("views/admin/header.php") ?>

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
               <th>Tên</th>
               <th>Ảnh mô tả</th>
               <th>Mô tả</th>
               <th>Hành động</th>
           </thead>
         <?php

         foreach ($categories as $key => $value) {

          ?>
           <tr>
               <td><?= $key+1  ?></td>
               <td><?= $value['name'] ?></td>
               <td>
                   <img src="publics/images/<?= $value['thumbnail']  ?>" width="100px" height="100px">

               </td>
               <td><?= $value['description'] ?></td>
               <td>
                   <a href="?admin=admin&mod=post&act=getCategory&id=<?= $value['id']  ?>" class="btn btn-primary"><i class="far fa-eye"></i></a>
                   <a href="?admin=admin&mod=category&act=edit&id=<?= $value['id']  ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                   <a href="?admin=admin&mod=category&act=delete&id=<?= $value['id']  ?>" onclick="return confirm('Bạn có muốn xóa ?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
               </td>

           </tr>
         <?php } ?>

       </table>
   </div>


<?php require_once("views/admin/footer.php") ?>
