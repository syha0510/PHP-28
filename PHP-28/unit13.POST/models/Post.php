<?php
require_once('Connection.php');
class Post{
    var $conn;
    function add(){}
    function __construct(){
      $obj= new Connection();

      $this->conn = $obj->conn;
    }
    function getAll(){
      $sql= "SELECT * FROM posts";
      $results =$this->conn->query($sql);
      $posts = array();

      while ($row=$results->fetch_assoc()) {
        $posts[]=$row;
      }
      return $posts;
    }

    function find($id){
      $sql="SELECT * FROM posts WHERE id=".$id;
      return $this->conn->query($sql)->fetch_assoc();
    }
    function insert($data){
    $sql="INSERT INTO posts (title,description,thumbnail) VALUES ('".$data['title']."','".$data['description']."','".$data['thumbnail']."')";
  
      return $this->conn->query($sql);
    }
    function update($id,$data){
    $sql="UPDATE posts SET title='".$data['title']."',description='".$data['description']."',thumbnail='".$data['thumbnail']."' WHERE id=".$data['id'];
      return $this->conn->query($sql);

    }
    function delete($id){
      $sql="DELETE FROM posts WHERE id=" .$id;
        return $this->conn->query($sql);
    }

}
 ?>
