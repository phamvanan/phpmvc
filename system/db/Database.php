<?php

class Database
{
    var $sql; //Chứa chuỗi lệnh truy vấn Sql
    var $conn; //Kết nối csdl qua PDO
    var $st; //Statment dùng để prepare và exec

    function __construct()
    {
        try {
            $this->conn = new PDO(
                'mysql:host=' . DB_HOST . ';charset=utf8;dbname=' . DB_NAME,
                DB_USER,
                DB_PASS
            );
            $this->conn->setAttribute(3, 2);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function getConnection()
    {
        return $this->conn;
    }
    function setSql($sql)
    {
        $this->sql = $sql;
    }

    function loadRow($params = [])
    {
        try {
            $this->st = $this->conn->prepare($this->sql);
            $this->st->execute($params);
            return $this->st->fetch(pdo::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function loadRows($params = [])
    {
        try {
            $this->st = $this->conn->prepare($this->sql);
            $this->st->execute($params);
            return $this->st->fetchAll(pdo::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function executeSql($params = [])
    {
        try {
            $this->st = $this->conn->prepare($this->sql);
            return $this->st->execute($params);
            // $this->conn->lastInsertId();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
