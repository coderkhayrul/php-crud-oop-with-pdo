<?php 
    require './controller/StudentController.php';
    if (isset($_POST['student_save'])) {
        $student = new Student();
        $data = $student->create($_REQUEST);
    }else{
        
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP PDO CURD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- CUSTOM STYLE -->
    <!-- <link rel="stylesheet" href="./style.css"> -->

</head>

<body class="bg-dark">
    <div class="container my-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h2>Student Create</h2>
                <a href="index.php" class="btn btn-primary">All Student</a>
            </div>
            <div class="card-body">
                <!-- Get Message -->
                <?php echo $data; ?>
                <form action="" method="post">
                    <div class="row form-group mb-2 justify-content-center">
                        <div class="col-md-6">
                            <label for="student_name">Student Name</label>
                            <input type="text" name="student_name" class="form-control" placeholder="Student Name">
                        </div>
                    </div>
                    <div class="row form-group mb-2 justify-content-center">
                        <div class="col-md-6">
                            <label for="student_email">Student Email</label>
                            <input type="email" name="student_email" class="form-control" placeholder="Student Email">
                        </div>
                    </div>
                    <div class="row form-group mb-2 justify-content-center">
                        <div class="col-md-6">
                            <label for="student_phone">Student Phone</label>
                            <input type="text" name="student_phone" class="form-control" placeholder="Student Phone">
                        </div>
                    </div>
                    <div class="row form-group justify-content-center">
                        <div class="col-md-2 text-center">
                            <button name="student_save" type="submit" class="btn btn-success">Add Student</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SCRIPT LINK -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <!-- <script src="./scripts.js"></script> -->
</body>

</html>