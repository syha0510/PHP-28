<?php
require_once('models/Category.php');
class CategoryController{
  function list(){
    $model=new Category();
    $categories=$model->getAll();
    //đổ lên view

    require_once('views/category/list.php');
  }
  function detail(){
    $id=$_GET['id'];
    $model=new Category();
    $category=$model->find($id);
    require_once('views/category/detail.php');
  }
   function create(){
     $model=new Category();
     $categories=$model-> getParentCategory();
    require_once('views/category/add.php');
  }
  function store(){
    $data=$_POST;
    $model=new Category();
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
         setcookie('success','Chỉnh sửa thành công',time()+5);
       }else{
         setcookie('error','Chỉnh sửa thất bại',time()+5);
       }


    if($status==true){
      header('Location:index.php?mod=category&act=list');
    }
  }
  function edit(){
    $id=$_GET['id'];
    $model=new Category();
    $categories=$model-> getParentCategory();
    $category=$model->find($id);
    require_once('views/category/edit.php');
  }
  function update(){
    $id=$_GET['id'];
    $data=$_POST;
    $model=new Category();
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
      header('Location:index.php?mod=category&act=list');
    }
  }
  function delete(){
    $id=$_GET['id'];
    $model=new Category();
    $status=$model->delete($id);
    if($status==true){
      header('Location:index.php?mod=category&act=list');
    }
  }

}
?>
