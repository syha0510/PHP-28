<?php
require_once('models/Post.php');
class PostController{
  function list(){
    $model=new Post();
    $posts=$model->getAll();
    //đổ lên view

    require_once('views/post/list.php');
  }
  function detail(){
    $id=$_GET['id'];
    $model=new Post();
    $post=$model->find($id);
    require_once('views/post/detail.php');
  }
  function create(){
   require_once('views/post/add.php');
 }
 function store(){
   $data=$_POST;
   $model=new Post();
   $target_dir = "publics/images/";  // thư mục chứa file upload

         $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

         if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi
           $img = array('thumbnail' => $_FILES["thumbnail"]["name"]);
           $data = array_merge($data, $img);
         } else { // Upload file có lỗi
           echo "Sorry, there was an error uploading your file.";
         }
   $status=$model->insert($data);
     if ($status) {
       setcookie('success','Thêm mới thành công',time()+5);
     }else{
       setcookie('error','Thêm mới thất bại',time()+5);
     }


   if($status==true){
     header('Location:index.php?mod=post&act=list');
   }
 }
 function edit(){
   $id=$_GET['id'];
   $model=new Post();
   $post=$model->find($id);
   require_once('views/post/edit.php');
 }
 function update(){
   $id=$_GET['id'];
   $data=$_POST;
    $model=new Post();
   $target_dir = "publics/images/";  // thư mục chứa file upload

	        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

	        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi
	        	$img = array('thumbnail' => $_FILES["thumbnail"]["name"]);
	        	$data = array_merge($data, $img);
	        } else { // Upload file có lỗi
	        	echo "Sorry, there was an error uploading your file.";
	        }
		$status=$model->update($id,$data);
			if ($status) {
				setcookie('success','Chỉnh sửa thành công',time()+5);
			}else{
				setcookie('error','Chỉnh sửa thất bại',time()+5);
			}

   if($status){
     header('Location:index.php?mod=post&act=list');
   }
 }
 function delete(){
   $id=$_GET['id'];
   $model=new Post();
   $status=$model->delete($id);
   if($status==true){
     header('Location:index.php?mod=post&act=list');
   }
 }

}

 ?>
