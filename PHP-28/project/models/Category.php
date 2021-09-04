<?php

require_once("Model.php");
class Category extends Model
{
    function __construct()
    {
      parent::__construct();
      $this->table="categories";
    }

    public function getCategory(){
			$sql = "SELECT * FROM ".$this->table;
			$result = $this->conn->query($sql);

			$getCategory = array();

			while ($row = $result->fetch_assoc()) {
				$getCategory[] = $row;
			}
			return $getCategory;

		}
    function getParentCategory()
    {
        $sql = "SELECT id,name,thumbnail,description FROM categories WHERE parent_id is Null";
        $results = $this->conn->query($sql);
        $categories = array();

        while ($row = $results->fetch_assoc()) {
            $categories[] = $row;
        }
        return $categories;
    }

    
}


 ?>
