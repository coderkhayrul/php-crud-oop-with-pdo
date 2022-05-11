<?php 
    require './controller/StudentController.php';
    session_start();
    $get_student = new Student();
    $students = $get_student->index();
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
                <h2>All Student</h2>
                <a href="create.php" class="btn btn-primary">Add Student</a>
            </div>
            <div class="card-body">
                <?php 
                if (!empty($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                } ?>
            <table class="table table-dark table-hover" border="2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sl = 1;   
                foreach ($students as $data){?>
                <tr>
                    <th scope="row"><?php echo $sl++ ?></th>
                    <td><?php echo $data['student_name'] ?></td>
                    <td><?php echo $data['student_email'] ?></td>
                    <td><?php echo $data['student_phone'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['student_id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="delete.php?id=<?php echo $data['student_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
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