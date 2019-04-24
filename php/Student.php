<?php

class Student {

    private $id;
    private $name;
    private $surname;
    private $grade;
    private $docID;
    private $imageURL;



    public function __construct($name, $surname, $grade, $docID, $imageURL) 
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->grade = $grade;
        $this->docID = $docID;
        $this->imageURL = $imageURL;

    }


    public function getID() {
        return $this->id;
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }


    

}

?>