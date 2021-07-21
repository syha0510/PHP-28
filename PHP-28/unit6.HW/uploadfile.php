<?php
	session_start();
	// if (isset($_SESSION['cart'])) {
	// 	$products = $_SESSION['cart'];
	// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container" >
        <h4>Upload ảnh đại diện</h4>
        <form  action="upload.php" method="POST" role="form" enctype="multipart/form-data">
          <p>Chọn ảnh đại diện:</p>
          <input type="file" name="avatar" >
          <br>
          <br>
          <button type="submit" value="submit" name="btn_login" class="btn btn-primary">Upload ảnh</button>
        </form>
        <br>
        <?php
        if(isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==false ){ ?>
          <div class="alert alert-danger" role="alert">
            <?php
                foreach($_SESSION['upload_status'][1] as $error){
                  echo "<p> - ".$error."</p>";
                }
                unset($_SESSION['upload_status']);
             ?>
          </div>
        <?php } ?>

        <?php
        if(isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true ){ ?>
          <div class="alert alert-success" role="alert">
            Đường dẫn sau khi upload:<?= $_SESSION['upload_status'][1]; ?>
          </div>
        <?php
          unset($_SESSION['upload_status']);
        }
        ?>



  </body>
</html>
