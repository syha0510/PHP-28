<?php
	require_once('models/User.php');
	class UserController{
		var $model;
	 function __construct(){
		 $this->model = new User();
	 }

		function list(){

				$model = new User();
			$users=$model->getAll();

			require_once('views/user/list.php');
		}
		function detail(){

			$id = $_GET['id'];

			$user = $this->model->find($id);
			require_once('views/user/detail.php');

		}
		public function add(){

			require_once('views/user/add.php');
		}

		public function store(){
			$data = $_POST;
			$target_dir = "publics/images/";  // thư mục chứa file upload

	          $target_file = $target_dir . basename($_FILES["avatar"]["name"]); // link sẽ upload file lên

	          if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi
	            $img = array('avatar' => $_FILES["avatar"]["name"]);
	            $data = array_merge($data, $img);
	          } else
						{ // Upload file có lỗi
	            echo "Sorry, there was an error uploading your file.";
	          }
			$success = $this->model->insert($data);

			if ($success) {
				setcookie('success','Thêm mới thành công',time()+10);
			}else{
				setcookie('error','Thêm mới thất bại',time()+10);
			}
			header("location:?admin=admin&mod=user&act=list");
		}
		public function delete(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success) {
				setcookie('success','Xóa thành công',time()+10);
			}else{
				setcookie('error','Xóa thất bại',time()+10);
			}
			header("location:?admin=admin&mod=user&act=list");
		}
		public function edit(){
			$id = $_GET['id'];
			$user = $this->model->find($id);
			require_once('views/user/edit.php');
		}

		public function update(){
			$data = $_POST;
			$target_dir = "publics/images/";  // thư mục chứa file upload

						$target_file = $target_dir . basename($_FILES["avatar"]["name"]); // link sẽ upload file lên

						if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi
							$img = array('avatar' => $_FILES["avatar"]["name"]);
							$data = array_merge($data, $img);
						} else
						{ // Upload file có lỗi
							echo "Sorry, there was an error uploading your file.";
						}
			$status = $this->model->update($data);

			if ($status) {
				setcookie('success','Cập nhật thành công',time()+5);
			}else{
				setcookie('error','Cập nhật thất bại',time()+5);
			}
			header("location:?admin=admin&mod=user&act=list");
		}

		public function search(){
			$keyWord = $_POST['keyWord'];
			$users = $this->model->search($keyWord);
			require_once('views/user/list.php');
		}

	}
?>
