<?php
require_once('models/Post.php');
require_once('models/Category.php');
require_once('models/User.php');


class PostController{
  function __construct(){
    $this->post = new Post();
    $this->category = new Category();
    $this->user = new User();
  }
  public function home(){
      $posts=$this->post->getAll();
      $categories=$this->category->getAll();
      $users=$this->user->getAll();
			require_once('views/admin/home.php');
		}
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
    $cate_model = new Category();
		$categories = $cate_model->getAll();
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



     header('Location:index.php?admin=admin&mod=post&act=list');

 }
 function edit(){
   $id=$_GET['id'];
   $model=new Post();
   $post=$model->find($id);
   $cate_model = new Category();
   $categories = $cate_model->getAll();
   require_once('views/post/edit.php');
 }
 function update(){
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
		$status=$model->update($data);
			if ($status) {
				setcookie('success','Chỉnh sửa thành công',time()+5);
			}else{
				setcookie('error','Chỉnh sửa thất bại',time()+5);
			}


     header('Location:index.php?admin=admin&mod=post&act=list');

 }
 function delete(){
   $id=$_GET['id'];
   $model=new Post();
   $status=$model->delete($id);
   if($status==true){
     header('Location:index.php?admin=admin&mod=post&act=list');
   }
 }
 public function getCategory(){
			$id = $_GET['id'];
      $random = $this->post->random();
      $categories=$this->category->getAll();
			$post =  $this->post->getCategory($id);
      $get6Post = $this->post->get6Post();
			$getCategory = $this->category->getCategory($id);//category
      $getCategoryname = $this->category->find($id);//category
			require_once('views/client/loadcate.php');
		}
    public function sidebar(){
      $random = $this->post->random();
      $categories=$this->category->getAll();
      	require_once('views/client/sidebar.php');
    }
    public function detailpost(){
      $id = $_GET['id'];
      $categories=$this->category->getAll();
      $random = $this->post->random();
      $post = $this->post->find($id);
      $get6Post = $this->post->get6Post();
      $getCategory = $this->category->getCategory($id);//category
      $getCategoryname = $this->category->find($id);//category
      require_once('views/client/detailpost.php');
    }
    public function search(){
      $keyWord = $_POST['keyWord'];
      $posts = $this->post->search($keyWord);
      $random = $this->post->random();
      $get6Post = $this->post->get6Post();
      $categories = $this->category->getAll();
      $getCategory = $this->category->getCategory();//category
      require_once('views/client/search.php');
    }

}

 ?>
