<?

$name = $_POST['name'];

if(isset($name) && $name != '') {
    $app['querybuilder']->insert('users', [
        'name' => $name
    ]);
} else {
    echo 'Nome inválido';
}

