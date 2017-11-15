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
    $this->view->cars = array("Mustang","Ferrari");
    $this->render("contact");
  }
}
 ?>
