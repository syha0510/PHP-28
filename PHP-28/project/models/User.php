<?php

require_once("Model.php");
class User extends Model
{
    function __construct()
    {
      parent::__construct();
      $this->table="users";
    }


    public function login($email, $password)
    {
      $query="SELECT * FROM ".$this->table." WHERE email='".$email."' and password='".$password."'";

      return $this->conn->query($query)->fetch_assoc();
    }
    public function search($keyWord){
			$sql = "SELECT * FROM users WHERE name like '%". $keyWord . "%'";
			
			$result = $this->conn->query($sql);

			$search = array();

			while ($row = $result->fetch_assoc()) {
				$search[] = $row;
			}
			return $search;
		}



}


 ?>
