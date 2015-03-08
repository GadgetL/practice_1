<?php
	#Incluide the vendors autoload
	require("../vendor/autoload.php");
	
	#instance a new Slim aplication
	$app = new \Slim\Slim();
	
	#defines a route for the GET method
	$app->get("/", function(){
		$view = require("index2_1.html");
		echo $view;
	});
	
	#Actually runs the application
	$app->run();