<?php

    // DB Connection
    include '../inc/connection.inc.php';

    // querying all data from table
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
?>

<div class="my-2">
    <a href="scripts/newUser.php" class="button is-primary">
        <i class="far fa-plus-square"></i>
    </a>
</div>
<table class="table is-striped is-hoverable is-fullwidth">
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
                        <a href='scripts/edit.php?id=".$row['id']."'>
                            <button id=".$row['id']." class='button is-warning'>
                                <i class='far fa-edit'></i>
                            </button>
                        </a>

                        <button id='".$row['id']."' class='button is-danger' data-button='delete'>
                            <i class='far fa-trash-alt'></i>
                        </button>
                    </td>";
            echo "</tr>";
        }
    }else{
        echo "<tr><td colspan='4'>NO DATA</td></tr>";
    }
?>

</table>



