
<?php

include 'db_connection.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM projects
            WHERE projects.ID = $id";

    $con->query($sql);
    $con -> close();

    header("Location: ../homework.php");

?>