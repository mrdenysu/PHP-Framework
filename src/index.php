<?php

require_once('core/ViewClass.php');

$view = new ViewClass();

$view->render('main', [
  'title' => 'Main Page',
  'text' => 'Hello world'
]);
