<?

class Connection
{
    public static function make($config)
    {
        $dns = $config['driver'] .
            ':host=' . $config['host'] .
            ';port=' . $config['port'] .
            ';dbname=' . $config['schema'];

        try {
            $db = new PDO($dns, $config['username'], $config['password'], $config['config']);
            return $db;
        } catch (PDOException $e) {
            die('Erro ao tentar estabelecer conexão. ' . $e->getMessage());
        }
    }
}
