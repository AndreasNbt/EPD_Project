<?php

include 'db_connection.php';

if (isset($_POST['goals']) && isset($_POST['path']) && isset($_POST['deliverables']) && isset($_POST['deadline'])) {

    $goals = $_POST['goals'];
    $path = $_POST['path'];
    $deliverables = $_POST['deliverables'];
    $deadline = $_POST['deadline'];

    $sql = "INSERT INTO projects(goals, filepath, deliverables, deadline)
            VALUES ('$goals', '$path', '$deliverables', '$deadline')";

        $con->query($sql);
        $con -> close();

        header("Location: ../homework.php");

}
else {
    header("Location: ../tutor_new_project.php");
    exit();
}
?>