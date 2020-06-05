<?php

namespace application\core;

use application\core\View;
use application\lib\Security;

 abstract class Controller
{
  public $route;
  public $view;
  public $model;
  protected $acl;
  public $security;
  function __construct($route)
  {
    $this->route=$route;
    if (empty($this->acl))
    {
      View::errorCode(500);
      die();
    }
    else {
      $this->security= new Security($this->route);
    }
    $this->view = new View($this->route);
    $this->model = $this->loadModel($route['controller']);
  }

  public function loadModel($name)
  {
    $path = 'application\models\\'. ucfirst($name);
    if (class_exists($path)){
      return new $path;
    }
  }

  static function redirect($page)
  {
    header("Location: $page");
  }

}




 ?>
