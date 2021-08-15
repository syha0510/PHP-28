<?php
  $mod = $_GET['mod'];
  $act=$_GET['act'];
switch ($mod) {
  case 'category':
  require_once('controllers/CategoryController.php');
  $controller=new CategoryController();
      switch ($act) {
      case 'list':
          $controller->list();
          break;
      case 'create':
          $controller->create();
          break;
      case 'store':
          $controller->store();
          break;
      case 'edit':
          $controller->edit();
          break;
      case 'update':
          $controller->update();
          break;
      case 'detail':
        $controller->detail();
          break;
      case 'delete':
        $controller->delete();
          break;



    }




      default:
      break;
      break;
      // default:
      break;
}
 ?>
