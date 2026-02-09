<?php

use app\controllers\ApiExampleController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */


$router->group('', function(Router $router) use ($app) {

	$router->get('/test', function() use ($app) {

		$db = Flight::db();
	if ($db) {
		echo "Database connection successful!";
	} else {
		echo "Database connection failed.";
	}
	});

	



	
}, [ SecurityHeadersMiddleware::class ]);