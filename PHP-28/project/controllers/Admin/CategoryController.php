<?php
require_once('models/Category.php');
require_once('controllers/BaseController.php');
class CategoryController extends BaseController{
  public function __construct()
  {
    if(!$_SESSION['is_login'])
    {
      $this->redirect('?admin=admin&mod=category&act=list');
    }
  }

  function list(){
    $model=new Category();
    $categories=$model->getAll();
    $this->view('category/list',[
      'categories'=>$categories
    ]);

  }
  function detail(){
    $id=$_GET['id'];
    $model=new Category();
    $category=$model->find($id);
    $this->view('category/detail',[
      'category'=>$category,
    ]);
  }
   function create(){
     $model=new Category();
     $categories=$model->getParentCategory();
     $this->view('category/add',[
       'categories'=>$categories
     ]);
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
         setcookie('success','Thêm mới thành công',time()+5);
       }else{
         setcookie('error','Thêm mới thất bại',time()+5);
       }


    if($status==true){
      $this->redirect('?admin=admin&mod=category&act=list');
    }
  }
  function edit(){
    $id=$_GET['id'];
    $model=new Category();
    $categories =$model->getAll();
    $category=$model->find($id);
    $this->view('category/edit',['category'=>$category, 'categories'=>$categories]);
  }
  function update()
  {

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

     $status=$model->update($data);


       if ($status) {

         setcookie('success','Chỉnh sửa thành công',time()+5);
       }else{
         setcookie('error','Chỉnh sửa thất bại',time()+5);
       }



    $this->redirect('?admin=admin&mod=category&act=list');

  }
  function delete()
  {
    $id=$_GET['id'];
    $model=new Category();
    $status=$model->delete($id);
    if($status)
    {
      $this->redirect('?admin=admin&mod=category&act=list');
    }
  }

}
?>
