<?php

use Silex\Application;

require 'vendor/autoload.php';

$app = new Application();

$app->get('/users/{id}', function($id){
  if(is_null($id))
    return "Parameter invalid";

  return 'User ID: '. $id;
})->value('id', null);

$app->run();