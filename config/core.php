<?php

use PDO, PDOException;

class core{
    use \config;
    private static $instance = null;
    private $conn;

    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;

    private function __construct(){
        try{
            $this->__updVars();
            $dsn = "mysql:host=".$this->db_host.";dbname=".$this->db_name;
            $this->conn = new PDO($dsn, $this->db_user, $this->db_pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: ".$e->getMessage();
        }
    }

    private function __updVars(){
        $this->db_host = $this->DB_HOST;
        $this->db_user = $this->DB_USER;
        $this->db_pass = $this->DB_PASW;
        $this->db_name = $this->DB_NAME;
    }

    //возвращает обьект класса database
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    //возвращает обьект подключения к базе данных (conn)
    public function getConnection()
    {
        return $this->conn;
    }
}