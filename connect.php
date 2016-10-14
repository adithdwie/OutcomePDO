<?php

class Connect {

    var $conn;
    var $host = 'localhost';
    var $dbname = 'outcomePDO';
    var $user = 'root';
    var $password = 'barca8bit';

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function disconnect() {
        $this->conn = null;
    }

}