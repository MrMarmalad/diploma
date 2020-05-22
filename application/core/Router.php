<?php

namespace application\core;


use application\core\View;
use application\lib\Db;
/**
 *
 */
class Router
{
  protected $routes=[];
  protected $params=[];
  function __construct()
  {
     $routes = require 'application/config/routes.php';
     foreach ($routes as $route => $arr) {
       $this->add($route, $arr);
     }
  }

  protected function add($route, $params)
  {
    $route = '~^'. $route . '$~';
    $this->routes[$route] = $params;
  }

  protected function match() {
          $url = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
          foreach ($this->routes as $route => $params) {
              if (preg_match($route, $url, $matches)) {
                  $this->params = $params;
                  return true;
              }
          }
          return false;
      }

  function load_config()
  {
    //return  require_once('application/config/routes.php');
  }

  public function run()
  {
//    $asd = new Db();
    if ($this->match())
    {
      $path = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
      if(class_exists($path))
      {
        $action = $this->params['action'] . 'Action';
        if (method_exists($path, $action))
        {
          $controller = new $path($this->params);
          $controller->$action();
        }
        else
        {
          View::errorCode(404);
        }
      }
      else
      {
        View::errorCode(404);
      }
    }
    else {
        View::errorCode(404);
    }
  }
}


 ?>
