<?php
  $bien_toan_cuc="Biến toàn cục";

  function luat_viet_nam(){
      $bien_cuc_bo="Đi bên phải";
      echo "<br> Luật trong nước:".$bien_cuc_bo;
      echo "<br> Luật quốc tế:".$GLOBALS["bien_toan_cuc"];
  }

luat_viet_nam()
 ?>
