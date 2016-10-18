<?php

use Silex\Application;

require 'vendor/autoload.php';

$app = new Application();

$app->before(function(){
  print 'Conteúdo before<br/>';
});

$app->get('/', function(Application $app){
  // return $app->escape('Middlewares' ." - ". $data);
  return $app->escape("Middlewares") . "<br/>";
});

$app->after(function(){
  print "After<br/>";
});

$app->finish(function(){
  print("Finish<br/>");
});

$app->run();