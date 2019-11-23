<?php

abstract class ApplicationClass
{
  protected $router;
  protected $address;

  public function __construct()
  {
    session_start();
    require_once('pfw/core/RouterClass.php');
    require_once('pfw/core/ModelClass.php');
    require_once('pfw/core/ViewClass.php');
    require_once('pfw/core/ControllerClass.php');
    $this->router = new RouterClass();
    $this->address = $this->router->getAddress();
  }

  abstract function run();
}
