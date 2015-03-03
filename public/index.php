<?php
  #Incluide the vendors autoload
  require("../vendor/autoload.php");
  
  #instance a new Slim aplication
  $app = new \Slim\Slim (
      array(
          #adds application settings
          'view' => new \Slim\Views\Blade(),
          'templates.path' => '../templates',
        )
    );
  #seput templates compiled cache
  $view = $app->view();
  $view ->parseOptions = array(
      'debug'=>true,
      'cache'=>'../html_cache'
    );
  
  #defines a route for the GET method
  $app->get("/", function(){
     $view=require("index.html");
     echo $view;
});

  #Actually runs the application
  $app->run();