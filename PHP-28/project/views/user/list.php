<?php require_once('views/admin/header.php'); ?>
 	<div class="container">
    <div class="input-group" style="width: 35%;margin-left: 65%;margin-top: 20px;">
      <form style="width:100%;display:flex;" class="" action="?admin=admin&mod=user&act=search"  method="post">
        <input name="keyWord" type="text" class="form-control" id="navbar-search-input" placeholder="Tìm kiếm" aria-label="search" aria-describedby="search" value="<?= (isset($keyWord) ? $keyWord : '')  ?>">
        <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
          <button  type="submit" class="input-group-text" id="search">
            <i class="icon-search"></i>
          </button>
        </div>
      </form>


    </div>
 		<?php
        if(isset($_COOKIE['success'])){
            ?>
            <div class="alert alert-success"><?= $_COOKIE['success']; ?></div>
        <?php } ?>
        <?php
        if(isset($_COOKIE['error'])){
            ?>
            <div class="alert alert-error"><?= $_COOKIE['error']; ?></div>
        <?php } ?>

 		<table class="table">
 			<thead>
 				<th>STT</th>
        <th>Ảnh đại diện</th>
 				<th>Tên</th>
 				<th>Email</th>
 				<th>Hành động</th>
 			</thead>
 			<?php
 				foreach ($users as $key => $user) {


 					?>
 			<tr>

 					<td><?= $key+1 ?></td>
          <td><img src="publics/images/<?= $user['avatar'] ?>" width="100px" height="100px"></td>
 					<td><?= $user['name']; ?></td>

 					<td><?= $user['email']; ?></td>

 					<td>
 						<a href="?admin=admin&mod=user&act=detail&id=<?= $user['id'] ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
 						<a href="?admin=admin&mod=user&act=edit&id=<?= $user['id'] ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <?php if ($_SESSION['auth']['id'] == 1) {?>
                             <a  href="?admin=admin&mod=user&act=delete&id= <?= $user['id'] ?> " onclick="return confirm('Bạn có muốn xóa ?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        <?php } ?>
 					</td>
 				</tr>
 			<?php }  ?>

 		</table>
 	</div>
 </body>
 </html>
  <?php require('views/admin/footer.php') ?>
