<?php
    include '../inc/connection.inc.php';

    // getting old data
    // getting id from URL
    $id = $_GET['id'];

    // getting old data from db of that specific id
    $selectQuery = "SELECT * FROM users WHERE id = '$id'";
    $r = $result = mysqli_query($conn, $selectQuery);
    $row = mysqli_fetch_array($r);    
    
    $oldName = $row['name'];
    $oldLastname = $row['lastname'];
    $oldEmail = $row['email'];

    // Setting typed in data as the new data
    if (isset($_POST['edit'])) {
        $name  = $_POST['name'];
        $lastname  = $_POST['lastname'];
        $email  = $_POST['email'];

        $query = "UPDATE users SET name = '$name', lastname = '$lastname', email = '$email' WHERE id = '$id'";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
<body>
    <div class="container">
        <a href="../index.php" class="btn btn-warning">BACK</a>
        <form method="POST">
            <input type="text" value="<?php echo $oldName; ?>" name="name" class="form-control" required>
            <input type="text" value="<?php echo $oldLastname; ?>" name="lastname" class="form-control" required>
            <input type="text" value="<?php echo $oldEmail; ?>" name="email" class="form-control" required>

            <input type="submit" value="Edit User" class="btn btn-success" name="edit">
        </form>
    </div>
</body>
</html>