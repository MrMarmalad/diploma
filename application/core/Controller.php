<?php

namespace application\core;

use application\core\View;

 abstract class Controller
{
  public $route;
  public $view;


  function __construct($route)
  {
    $this->route=$route;
    //echo $route;
    $this->view = new View($this->route);
  }
}




 ?>
