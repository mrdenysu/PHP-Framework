<?php

class RouterClass
{
  private $address;

  public function __construct()
  {
    $this->address = $_SERVER['REQUEST_URI'];
  }

  /**
   * Get the value of address
   */
  public function getAddress()
  {
    return $this->address;
  }
}
