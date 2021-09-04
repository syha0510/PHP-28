<?php
require_once "models/User.php";
require_once('controllers/BaseController.php');
  class AuthController extends BaseController
  {
    public function login()
    {
      $data=$_POST;
      $model=new User();
      $user =$model->login($data['email'],md5($data['password']));

      if ($user) {
        $_SESSION['auth']=$user;
        $_SESSION['is_login']=true;
        $this->redirect('?admin=admin&mod=post&act=home');

      }
      else {
        $this->back();

      }

    }

    public function getFormLogin()
    {
      require_once('views/auth/login.php');
    }

    public function logout()
    {
      $_SESSION['auth']=null;
      $_SESSION['is_login']=false;
      $this->redirect('?admin=auth&mod=auth&act=getFormLogin');
    }

  }
 ?>
