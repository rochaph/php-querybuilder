<?

$config = [
    "database" => [
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "username" => "root",
        "password" => '',
        "schema" => "mytodo",
        "config" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
