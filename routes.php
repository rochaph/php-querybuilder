<?

$routes = [
    'GET' => [
        '' => 'controllers/index.php',
        'about' => 'controllers/about.php',
        'about/culture' => 'controllers/about-culture.php',
        'contact' => 'controllers/contact.php'
    ],
    'POST' => [
        'names' => 'controllers/add-name.php'
    ]
];
