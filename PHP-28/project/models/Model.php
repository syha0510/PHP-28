<?php
require_once('Connection.php');

class Model{
  protected $conn;
  protected $table;

  public function __construct()
  {
      $obj=new Connection;
      $this->conn=$obj->conn;
  }
  function getAll()
  {
    $sql= "SELECT * FROM ".$this->table;
    $results =$this->conn->query($sql);
    $categories = array();

    while ($row=$results->fetch_assoc()) {
      $categories[]=$row;
    }
    return $categories;
  }
  function find($id){
    $sql="SELECT * FROM ".$this->table." WHERE id=".$id;
    return $this->conn->query($sql)->fetch_assoc();
  }
  function insert($data){
    $fields='';
    $values='';
    foreach ($data as $key => $value) {
      $fields .=$key.',';
      $values .="'".$value."',";
    }
    $fields =trim($fields,',');
      $values =trim($values,',');
    $sql="INSERT INTO ".$this->table."(".$fields.") VALUES (".$values.")";

    return $this->conn->query($sql);
  }

  function update($data){
    $values='';
    foreach ($data as $key => $value) {
      $values .=$key."='".$value."',";
    }
    $values =trim($values,',');
    $sql =  "UPDATE ".$this->table." SET ".$values." WHERE id = '".$data['id']."' ";
    // echo $sql;
    // die();


    return $this->conn->query($sql);
  }
  function delete($id){
    $sql = "DELETE FROM " .$this->table. " WHERE id= " . $id;

    return $this->conn->query($sql);
  }


}
 ?>
