
<?php

include 'db_connection.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM documents
            WHERE documents.ID = $id";

    $con->query($sql);
    $con -> close();

    header("Location: ../documents.php");

?>