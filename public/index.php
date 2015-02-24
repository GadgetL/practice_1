<?php
  #Incluide the vendors autoload
  require("../vendor/autoload.php");
  
  #instance a new Slim aplication
  $app = new \Slim\Slim();
  
  #defines a route for the GET method
  $app->get("/", function(){
     echo "Hello World";
});

  #Actually runs the application
  $app->run();