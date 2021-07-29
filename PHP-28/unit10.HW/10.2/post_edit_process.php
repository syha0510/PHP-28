<?php
require_once('connection.php');

$data=$_POST;

// $id=isset($_GET['id'])?$_GET['id']:0;

$sql="UPDATE posts SET title='".$data['title']."',description='".$data['description']."',category_id='".$data['category_id']."' WHERE id=".$data['id'];

$status =$conn->query($sql);
if($status==true){
  header("Location:posts.php");
}else{
  header("Location:post_edit.php?id=".$data['id']);
}
 ?>
