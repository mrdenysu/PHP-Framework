<?php

abstract class ControllerClass
{
  protected $model, $view, $args;

  public function __construct(array $args)
  {
    $this->args = $args;
    $this->model = new ModelClass();
    $this->view = new ViewClass();
  }
}
