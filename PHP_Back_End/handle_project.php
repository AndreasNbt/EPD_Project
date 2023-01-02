
<?php

include 'db_connection.php';

if (isset($_POST['goals']) && isset($_POST['path']) && isset($_POST['deliverables']) && isset($_POST['deadline']) && isset($_POST['type'])) {

    $goals = $_POST['goals'];
    $path = $_POST['path'];
    $deliverables = $_POST['deliverables'];
    $deadline = $_POST['deadline'];

    $type = $_POST['type'];

    if ($type === "add") {
        $sql = "INSERT INTO projects(goals, filepath, deliverables, deadline)
                VALUES ('$goals', '$path', '$deliverables', '$deadline')";
    } else if ($type === "update" && isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "UPDATE projects
                SET goals='$goals', filepath='$path', deliverables='$deliverables', deadline='$deadline'
                WHERE projects.ID = $id";
    }
}
else if ($_GET['type'] === "delete") {
    $id = $_GET['id'];

    $sql = "DELETE FROM projects
            WHERE projects.ID = $id";
}
else {
    header("Location: ../tutor_new_project.php");
    exit();
}
$con->query($sql);
$con -> close();
header("Location: ../homework.php");

?>
