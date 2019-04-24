<?php

class DBConnnection {

    private $username;
    private $pass;
    private $server;
    private $db;
    private $conn;

    public function __construct($username, $pass, $server, $db) 
    {
        $this->username = $username;
        $this->server = $server;
        $this->pass = $pass;
        $this->db = $db;

    }


    public function getConnection() {
        return $this->conn;
    }

    public function setConnection($conn) {
        $this->conn = $conn;
    }

    public function getUsername() {
        return $this->username;
    }
    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPass() {
        return $this->pass;
    }
    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function getServer() {
        return $this->server;
    }

    public function setServer($server) {
        $this->server = $server;
    }

    public function getDB() {
        return $this->db;
    }

    public function setDB($db) {
        $this->db = $db;
    }


    
    
    public function openConnection() {
        $this->conn = new mysqli($this->server, $this->username, $this->pass, $this->db);
       
        
        if($this->conn->connect_error) {
            echo('error');
        }
        
    }


    public function closeConnection() {
        $this->conn->close();
    }

}


?>