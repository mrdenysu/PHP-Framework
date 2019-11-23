<?php

require_once('pfw/core/ApplicationClass.php');

class Application extends ApplicationClass
{
  public function run()
  {
    echo $this->address;
  }
}

$app = new Application();
$app->run();
