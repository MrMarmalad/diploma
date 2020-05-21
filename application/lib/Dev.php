<?php


ini_set('display_errors', TRUE);
error_reporting(E_ALL);

function debug($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  exit;
}

 ?>
