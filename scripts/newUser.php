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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
<body>
    <div class="container">
        
        <a href="../index.php" class="button is-warning mt-6">BACK</a>
        
        <form method="POST" class="form">
            
            <label class="label mt-2">Name</label>
            <input type="text" placeholder="Name" name="name" class="input" required>
            
            <label class="label mt-2">Lastname</label>
            <input type="text" placeholder="Lastname" name="lastname" class="input" required>
            
            <label class="label mt-2">Email</label>
            <p class="control has-icons-left has-icons-right">
                <input type="text" placeholder="Email" name="email" class="input" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </p>

            <input type="submit" value="Add New User" class="button is-success mt-4" name="submit">
        </form>
    </div>
</body>
</html>