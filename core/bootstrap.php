<?

require 'config.php';

$app = [];

$app['config'] = $config;

$app['querybuilder'] = new Querybuilder(Connection::make($app['config']['database']));
