<?php
require_once('connection.php');

$data=$_POST;

// $id=isset($_GET['id'])?$_GET['id']:0;
$pname =$_FILES['thumbnail']['name'];
     $tname = $_FILES["thumbnail"]["tmp_name"];

 $uploads_dir = 'uploads/';
  move_uploaded_file($tname, $uploads_dir.'/'.$pname);
$sql="UPDATE categories SET name='".$data['name']."',description='".$data['description']."',thumbnail='".$pname."' WHERE id=".$data['id'];

$status =$conn->query($sql);
if($status==true){
  header("Location:categories.php");
}else{
  header("Location:category_edit.php?id=".$data['id']);
}
 ?>
