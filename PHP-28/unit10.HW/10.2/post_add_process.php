<?php
require_once('connection.php');

$data=$_POST;

// $id=isset($_GET['id'])?$_GET['id']:0;

$sql="INSERT INTO posts (title,description,category_id) VALUES ('".$data['title']."','".$data['description']."','".$data['category_id']."')";

$status =$conn->query($sql);

// echo $sql;
// die();
if($status==true){
  header("Location:posts.php");
}else{
  header("Location:post_add.php");
}
 ?>
