<?php

use Silex\Application;

require 'vendor/autoload.php';

$app = new Application();

$app->get('/users/{id}', function($id){
  return 'User ID: '. $id;
});

$app->run();