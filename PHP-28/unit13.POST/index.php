<?php
  $mod = $_GET['mod'];
  $act=$_GET['act'];
  switch ($mod) {
    case 'post':
    require_once('controllers/PostController.php');
    $controller=new PostController();
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


      default:
        // code...
        break;
    }


      break;

    default:
      // code...
      break;
  }
 ?>
