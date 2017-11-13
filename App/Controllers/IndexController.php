<?php

namespace App\Controllers;

use App\Conn;
use App\Models\Clientes;
use SON\Controller\Action;

class IndexController extends Action
{

  public function index(){
    $cliente = new Clientes(Conn::getDb());
    $this->views->clientes = $cliente->fetchAll();

    $this->render("index");
  }

  public function contact(){
    $this->view->cars = array("Mustang","Ferrari");
    $this->render("contact");
  }
}
 ?>
