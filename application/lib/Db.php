<?php

namespace application\lib;

/**
 *
 */
 use PDO;
class Db
{
  protected $db;

  function __construct()
  {
     $config = require 'application/config/db.php';

     //debug($config);
     $this->db = new PDO("mysql:host=${config['host']};dbname=${config['name']}",$config['user'], $config['password']);
  }

  public function query($sql, $params=[])
  {
    $stmt = $this->db->prepare();
    if (isset($params)){
      foreach ($params as $key => $val) {
        $stmt->bindValue(':'.$key, $val);
      }
    }
    $stmt->execute();
    return $stmt;
  }

  public function row ($sql, $params=[])
  {
    $result = $this->query($sql, $params);
    if (($result != FALSE)){
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }
  }

  public function col ($sql, $params=[])
  {
    $result = $this->query($sql, $params);
    return $result->fetchColumn();
  }
}






 ?>
