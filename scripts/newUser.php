<?php
    include '../inc/connection.inc.php';

    if (isset($_POST['submit'])) {
        $name  = $_POST['name'];
        $lastname  = $_POST['lastname'];
        $email  = $_POST['email'];

        $query = "INSERT INTO users(name, lastname, email) VALUES('$name', '$lastname', '$email')";
        $result = mysqli_query($conn, $query);

        if ($result){
            header("Location:../index.php");
        }else{
            echo "Failed";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | New User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="../index.php" class="btn btn-warning">BACK</a>
        <form method="POST">
            <input type="text" placeholder="Name" name="name" class="form-control" required>
            <input type="text" placeholder="Lastname" name="lastname" class="form-control" required>
            <input type="text" placeholder="Email" name="email" class="form-control" required>

            <input type="submit" value="Add New User" class="btn btn-success" name="submit">
        </form>
    </div>
</body>
</html>