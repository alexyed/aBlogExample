<?php
/* variables de desarrollo */
ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

/* requiriendo autoload para gestionar las clases con PSR-4*/
require_once '../vendor/autoload.php';

use Aura\Router\RouterContainer;

/*Usando Zend Diactoros para implementar el estandar PSR-7*/
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
	$_SERVER,
	$_GET,
	$_POST,
	$_COOKIE,
	$_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', '/', [
	'controller' => "ruta/del/controller",
	'action' => 'metodo a usar en el controller'
]);
