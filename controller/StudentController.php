<?php
require './model/database.php';

class Student{
    private $con;
    function __construct() {
        $this->con = new Database();
    }

    function index(){
        $sql = "SELECT * FROM student";
        $students = $this->con->pdo->query($sql);
        return $students;
    }

    function create(){
        
    }

    function edit(){
        
    }

    function update(){
        
    }

    function destroy(){
        
    }


}