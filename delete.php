<?php 
    require './controller/StudentController.php';
    
    // Get Single Student By ID
    $student = new Student();
    $id = $_GET['id'];
    $data = $student->destroy($id);