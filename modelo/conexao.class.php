<?php
abstract class conexao {
    protected $db;

    protected function __construct()
    {
        $dsn="mysql:host=localhost;dbname=livraria;charset=utf8";
        $utf = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        );
        try
        {
            $this->db = new PDO($dsn, "root", "", $utf);
        }
        catch ( Exception $e )
        {
            die ($e->getMessage());
        }
    }
}
