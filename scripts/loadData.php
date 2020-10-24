<?php

    // DB Connection
    include '../inc/connection.inc.php';

    // querying all data from table
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
?>
<a href="scripts/newUser.php" class="btn btn-success">New User</a>
<table class="table table-bordered table-strpied">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Lastname</td>
        <td>Email</td>
        <td>Action</td>
    </tr>

<?php
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['lastname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo    "<td>
                        <a href='scripts/edit.php?id=".$row['id']."'><button id=".$row['id']." class='btn btn-warning'>Update</button></a>
                        <button id='".$row['id']."' class='delete btn btn-danger'>Delete</button>
                    </td>";
            echo "</tr>";
        }
    }else{
        echo "<tr><td colspan='4'>NO DATA</td></tr>";
    }
?>

</table>



