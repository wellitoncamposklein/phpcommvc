<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action
{

  public function index(){
    $cliente = Container::getModel("Clientes");
    $this->views->clientes = $cliente->fetchAll();

    $this->render("index");
  }

  public function contact(){
    $cliente = Container::getModel("Clientes");
    $this->views->clientes = $cliente->find(2);

    $this->render("contact",false);
  }
}
 ?>
