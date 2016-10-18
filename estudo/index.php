<?php

use Silex\Application;

require 'vendor/autoload.php';

$app = new Application();

$app->get('/users/{id}', function($id){
  if(is_null($id))
    return "id_Inexistente"."<br/>";

  return "Meu id é:" . $id."<br/>";
})
->value('id',null);

$app->before(function(){
  print "Conteúdo before<br/>";
});

$app->after(function(){
  print "After<br/>";
});

$app->finish(function(){
  print 'Conteúdo finish<br/>';
});

$app->run();