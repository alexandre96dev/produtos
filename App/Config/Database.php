<?php
class Database
{
    protected  $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=crud_produtos";

        // Criando a conexão e armazenado na propriedade definida para tal.
        // Veja o que é PDO: https://www.php.net/manual/pt_BR/intro.pdo.php
        $this->conexao = new PDO($dsn, 'root', '');
    }
}
