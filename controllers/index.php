<?

$tasks = $app['querybuilder']->selectAll('todos');

require 'views/index.view.php';
