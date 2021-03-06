<?
class Querybuilder
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {

        $statement = $this->pdo->prepare("select * from " . $table);

        $statement->execute();

        return $statement->fetchAll();
    }

    public function insert($table, $parameters)
    {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        $statement = $this->pdo->prepare($sql);

        try {
            $statement->execute($parameters);
        } catch (PDOException $e) {
            echo 'Ops, algo deu errado!';
        }
    }
}
