<?php

    include '../inc/connection.inc.php';

    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id = '$id'";
    mysqli_query($conn, $query);

?>