<?php

class RouterClass
{
  private $address;

  public function __construct()
  {
    $this->address = explode('?', $_SERVER['REQUEST_URI'])[0];
  }

  /**
   * Get the value of address
   */
  public function getAddress()
  {
    return $this->address;
  }
}
