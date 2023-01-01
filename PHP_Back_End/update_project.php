
<?php

include 'db_connection.php';

if (isset($_POST['goals']) && isset($_POST['path']) && isset($_POST['deliverables']) && isset($_POST['deadline'])) {

    $id = $_POST['id'];
    $goals = $_POST['goals'];
    $path = $_POST['path'];
    $deliverables = $_POST['deliverables'];
    $deadline = $_POST['deadline'];

    $sql = "UPDATE projects
            SET goals='$goals', filepath='$path', deliverables='$deliverables', deadline='$deadline'
            WHERE projects.ID = $id";

    $con->query($sql);
    $con -> close();

    header("Location: ../homework.php");

}
else {
    header("Location: ../tutor_update_project.php");
    exit();
}

?>