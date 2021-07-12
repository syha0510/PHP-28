<?php
$user='';
$password='';

if(isset($_POST['user'])){

  $user=$_POST['user'];
}

if(isset($_POST['pwd'])){

  $password=$_POST['pwd'];
}

if($user=='admin' && $password=='123456'){
  echo "<br> Đăng nhập thành công";
}else {
  echo "<br> Đăng nhập thất bại";
}
?>
