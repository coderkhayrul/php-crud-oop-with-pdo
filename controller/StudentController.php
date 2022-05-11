<?php
session_start();
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
    function edit($id){
        $sql = "SELECT * FROM student WHERE student_id = '$id'";
        $result = $this->con->pdo->query($sql);
        return $result;
    }

    // Update Student
    function update($request){
        $student_name = $request['student_name'];
        $student_email = $request['student_email'];
        $student_phone = $request['student_phone'];
        $student_id = $request['student_id'];

        $sql = "UPDATE student SET student_name=?, student_email=?, student_phone=? WHERE student_id=?";
        $stmt= $this->con->pdo->prepare($sql);
        $statement = $stmt->execute([$student_name,$student_email,$student_phone, $student_id]);
        if ($statement == true) {
            $_SESSION['message'] =  "<div class='alert alert-success' role='alert'>Update Success!</div>";
            return header("Location: index.php");
        }else{
            return "<div class='alert alert-danger' role='alert'>Update Failed!</div>";
        }
    }

    // Destory Student
    function destroy($id){
        $sql = "DELETE FROM student WHERE student_id = '$id'";
        $statment = $this->con->pdo->query($sql);
        if ($statment == true) {
            $_SESSION['message'] =  "<div class='alert alert-success' role='alert'>Delete Success!</div>";
            return header("Location: index.php");
        }else{
            $_SESSION['message'] =  "<div class='alert alert-danger' role='alert'>Delete Failed!</div>";
            return header("Location: index.php");
        }
        
    }


}