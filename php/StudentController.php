<?php 

include 'Student.php';
include 'DBConnection.php';

class StudentController {

    private $conn;

    public function __construct($con) 
    {
        $this->conn = new DBConnnection($con->getUsername(), $con->getPass(), $con->getServer(), $con->getDB());
    }


    public function insert($Student) {
        $this->conn->openConnection();
        
        $id = 3;
        $name = $Student->getName();
        $surname = $Student->getSurname();
        $sql = "INSERT INTO Students (ID, Name, Surname) VALUES(?, ?, ?)";
        
        $ps = $this->conn->getConnection()->prepare($sql);
        var_dump($ps);
        
        $ps->bind_param('iss',$id, $name, $surname);
        $ps->execute();

        $ps->close(); 
        $this->conn->closeConnection();

    }



    public function update($Student) {
        $this->conn->openConnection();

        $id = $Student->getID();
        $name = $Student->getName();
        $surname = $Student->getSurname();

        $sql = "UPDATE Students SET name=?, surname=? WHERE ID=?";
        $ps = $this->conn->getConnection()->prepare($sql);
        $ps->bind_param('ssi', $name, $surname, $id);
        $ps->execute();

        $ps->close();
        $this->conn->closeConnection();


        
    }


}

$dbConn = new DBConnnection("root", "Ponocnosunce.24", "127.0.0.1", "BFtraining3");
$controller = new StudentController($dbConn);

//var_dump($controller);
$controller->insert(new Student("Tea","Mitrovic", "", "", ""));







?>