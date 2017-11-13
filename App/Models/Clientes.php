<?php

namespace App\Models;

class Clientes
{
  protected $db;

  function __construct(\PDO $db)
  {
    $this->db = $db;
  }

  public function fetchAll(){
    $query = "select * from clientes";
    return $this->db->query($query);
  }
}
 ?>
