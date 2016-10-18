<?php

use Silex\Application;

require 'vendor/autoload.php';

$app = new Application();

$app->get('/', function(Application $app){
  // return $app->escape('Middlewares' ." - ". $data);
  return $app->escape("Middlewares") . "<br/>";
})
->before(function(){
  print 'Conteúdo before<br/>';
})
->after(function(){
  print "After<br/>";
});

$app->run();