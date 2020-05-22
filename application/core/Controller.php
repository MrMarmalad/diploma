<?php

namespace application\core;

use application\core\View;

 abstract class Controller
{
  public $route;
  public $view;
  public $model;

  function __construct($route)
  {
    $this->route=$route;
    //echo $route;
    $this->view = new View($this->route);
    $this->model = $this->loadModel($route['controller']);

  }

  public function loadModel($name)
  {
    $path = 'application\models\\'. ucfirst($name);
    //debug($path);
    if (class_exists($path)){
      return new $path;
    }
  }
}




 ?>
