<?php
require './model/database.php';

class Student{
    
    // DataBase Link
    private $con;
    function __construct() {
        $this->con = new Database();
    }

    // Get All Student
    function index(){
        $sql = "SELECT * FROM student";
        $students = $this->con->pdo->query($sql);
        return $students;
    }

    // Create Student
    function create($request){
        $student_name = $request['student_name'];
        $student_email = $request['student_email'];
        $student_phone = $request['student_phone'];

        $sql = "INSERT INTO student (student_name, student_email, student_phone) VALUES (?,?,?)";
        $stmt= $this->con->pdo->prepare($sql);
        $statement = $stmt->execute([$student_name,$student_email,$student_phone]);

        if ($statement == true) {
            return "<div class='alert alert-success' role='alert'>Insert Success!</div>";
        }else{
            return "<div class='alert alert-danger' role='alert'>Insert Failed!</div>";
        }
    }

    // Edit Student
    function edit(){
        
    }

    // Update Student
    function update(){
        
    }

    // Destory Student
    function destroy(){
        
    }


}