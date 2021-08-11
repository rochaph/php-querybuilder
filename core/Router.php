<?

class Router
{

    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct($routes)
    {
        if (array_key_exists('GET', $routes)) 
        {
            $this->routes['GET'] = $routes['GET'];
        }

        if (array_key_exists('POST', $routes))
        {
            $this->routes['POST'] = $routes['POST'];
        }
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestMethod)
    {
        if (array_key_exists($uri, $this->routes[$requestMethod])) {
            return $this->routes[$requestMethod][$uri];
        }

        throw new Exception('Rota não definida.');
    }
}
