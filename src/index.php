<?php

require_once('core/ViewClass.php');
require_once('core/ModelClass.php');

$view = new ViewClass();
$model = new ModelClass();

$model->DB_init();
$text = $model->DB_row('SELECT * FROM `test`');

$view->render('main', [
  'title' => 'Main Page',
  'text' => $text
]);
