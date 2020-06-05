<?php

namespace application\controllers;
/**
 *
 */
 use application\core\Controller;

class MainController extends Controller
{
  protected $acl = [
    'all'=>['indexAction',
            'enterAction',]
  ];

  public function indexAction()
  {
    //$this->model->test();

    $this->view->render('Стартовая страница', ['menu' => 'defaultMenu']);

    //echo $passwd->setPassword('alex','03031998');
    //var_dump($this->model->enter('alex', 'alex'));
  }

  public function enterAction()
  {
    //var_dump($_POST);
    
    $status = $this->model->enter($_POST['login'], $_POST['password']);
    switch ($status) {
      case 'register_admin':
        //header('Location: configuration/registerAdmin');
        $this->redirect('configuration/registerAdmin');
        break;
      case 'success':
        echo $status;
        break;
      case 'not_found':
        echo $status;
        break;
    }
  }
  public function registerAction()
  {
    echo "register";
  }
}



 ?>
