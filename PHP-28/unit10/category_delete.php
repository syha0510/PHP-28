<?php
require_once 'connection.php';

$id=isset($_GET['id'])?$_GET['id']:0;

$sql="DELETE FROM categories WHERE id=" .$id;


$status=$conn->query($sql);

if($status==true){
  setcookie('delete_msg',true,time()+10);

}else{
  setcookie('delete_msg',false,time()+10);
}
  header("Location:categories.php");
 ?>
