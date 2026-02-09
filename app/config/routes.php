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

	$router->get('/affiche-login', function() use ($app) {
		$nonce = $app->get('csp_nonce');
		$app->render('login', ['nonce' => $nonce]);
	});

	$router->get('/affiche-inscription', function() use ($app) {
		$nonce = $app->get('csp_nonce');
		$app->render('inscription', ['nonce' => $nonce]);
	});

	$router->get('/test-js', function() use ($app) {
		$nonce = $app->get('csp_nonce');
		$app->render('test', ['nonce' => $nonce]);
	});

	



	
}, [ SecurityHeadersMiddleware::class ]);