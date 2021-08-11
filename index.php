<?
require 'vendor/autoload.php';
require 'core/bootstrap.php';
require 'routes.php';

$router = new Router($routes);

require $router->direct(Request::uri(), Request::method());
