<?php
class Sinhvien{
  private $name;
  private $gioitinh;
  private $ngaysinh;
  private $quequan;
  // ten
  function setName($name){
    $this->name=$name;
  }

  function getName(){
    return $this->name;
  }
  // gioitinh
  function setgioitinh($gioitinh){
    $this->gioitinh=$gioitinh;
  }

  function getgioitinh(){
    return $this->gioitinh;
  }
  //ngaysinh
  function setngaysinh($ngaysinh){
    $this->ngaysinh=$ngaysinh;
  }

  function getngaysinh(){
    return $this->ngaysinh;
  }
  //que quan
  function setquequan($quequan){
    $this->quequan=$quequan;
  }

  function getquequan(){
    return $this->quequan;
  }

}

$sinhvien= new Sinhvien();
// lay ten
$sinhvien->setName("Trần Sỹ Hà");
echo "Họ và tên: ".$sinhvien->getName();
// lay  gioi tinh
$sinhvien->setgioitinh("Nam");
echo "<br>Giới tính: ".$sinhvien->getgioitinh();
//lay ngay sinh
$sinhvien->setngaysinh("05/10/2001");
echo "<br>Ngày sinh: ".$sinhvien->getngaysinh();
//lay que quan
$sinhvien->setquequan("Hà Nội");
echo "<br>Quê quán: ".$sinhvien->getquequan();
 ?>
