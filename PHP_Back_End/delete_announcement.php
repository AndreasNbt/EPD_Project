
<?php

include 'db_connection.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM announcements
            WHERE announcements.ID = $id";

    $con->query($sql);
    $con -> close();

    header("Location: ../announcement.php");

?>