<?php

class PDOConnection
{
    private $db_username = "root";
    private $db_password = "";
    private $db_porta = "3306";
    private $db_database = "scriptspp";
    private $db_prefix = "";
    private $db_sufix = "";
    private $db_host = "127.0.0.1";
    private $db_charset = 'utf8mb4';



    public $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function conect()
    {
        $dsn = "mysql:host=$this->db_host;dbname=$this->db_database;charset=$this->db_charset;port=$this->db_porta";
        try {
            return new PDO($dsn, $this->db_username, $this->db_password, $this->options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}
