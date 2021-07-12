<?php
  if (isset($_POST['hoten'])) {
    echo "<br> Họ và tên: ".$_POST['hoten'];
  }
  if (isset($_POST['gioitinh'])) {
    echo "<br> Giới tính: ".$_POST['gioitinh'];
  }
  if (isset($_POST['ngaythangnam'])) {
    echo "<br> Ngày/Tháng/Năm sinh: ".$_POST['ngaythangnam'];
  }
  if (isset($_POST['quequan'])) {
    echo "<br> Quê quán: ".$_POST['quequan'];
  }
  if (isset($_POST['ngoaingu'])) {
    echo "<br> Ngoại ngữ: ".$_POST['ngoaingu'];
  }
  if (isset($_POST['thongtinthem'])) {
    echo "<br> Thông tin thêm: ".$_POST['thongtinthem'];
  }


 ?>
