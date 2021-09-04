<?php
	require_once('Model.php');

	class Post extends Model{
		var $table = "posts";

		public function get3Post(){
			$sql = "SELECT posts.*,categories.name FROM ".$this->table." INNER JOIN categories ON ".$this->table.".category_id = categories.id ORDER BY ".$this->table.".id DESC LIMIT 3";
			$result = $this->conn->query($sql);

			$threePost = array();

			while ($row = $result->fetch_assoc()) {
				$threePost[] = $row;
			}
			return $threePost;

		}
		public function get2Post(){
			$sql = "SELECT posts.*,categories.name FROM ".$this->table." INNER JOIN categories ON posts.category_id = categories.id ORDER BY posts.id DESC LIMIT 3,2";

			$result = $this->conn->query($sql);

			$twoPost = array();

			while ($row = $result->fetch_assoc()) {
				$twoPost[] = $row;
			}
			return $twoPost;

		}
		public function get6Post(){
			$sql = "SELECT posts.*,categories.name FROM ".$this->table." INNER JOIN categories ON posts.category_id = categories.id ORDER BY posts.id DESC LIMIT 6";

			$result = $this->conn->query($sql);

			$get6Post = array();

			while ($row = $result->fetch_assoc()) {
				$get6Post[] = $row;
			}
			return $get6Post;

		}

		public function random(){
			$sql = "SELECT posts.*,categories.name FROM ".$this->table." INNER JOIN categories ON posts.category_id = categories.id ORDER BY RAND ( ) LIMIT 3";

			$result = $this->conn->query($sql);

			$random = array();

			while ($row = $result->fetch_assoc()) {
				$random[] = $row;
			}
			return $random;

		}
		public function viewcount(){
			$sql = "SELECT posts.*,categories.name FROM ".$this->table." INNER JOIN categories ON posts.category_id = categories.id WHERE view_count > 50";

			$result = $this->conn->query($sql);

			$viewcount = array();

			while ($row = $result->fetch_assoc()) {
				$viewcount[] = $row;
			}
			return $viewcount;

		}
		public function getallCategory(){
			$sql = "SELECT posts.*,categories.name FROM ".$this->table." INNER JOIN categories ON ".$this->table.".category_id = categories.id ORDER BY posts.id,posts.created_at DESC";

			$result = $this->conn->query($sql);

			$getallCategory = array();

			while ($row = $result->fetch_assoc()) {
				$getallCategory[] = $row;
			}
			return $getallCategory;
		}
		public function getCategory($id){
			$sql = "SELECT posts.*,categories.name FROM posts INNER JOIN categories ON posts.category_id = categories.id  WHERE categories.id = ".$id ;
			
			$result = $this->conn->query($sql);

			$getCategory = array();

			while ($row = $result->fetch_assoc()) {
				$getCategory[] = $row;
			}
			return $getCategory;
		}
		public function search($keyWord){
			$sql = "SELECT * FROM posts WHERE title like '%". $keyWord . "%'";

			$result = $this->conn->query($sql);

			$search = array();

			while ($row = $result->fetch_assoc()) {
				$search[] = $row;
			}
			return $search;
		}




	}
?>
