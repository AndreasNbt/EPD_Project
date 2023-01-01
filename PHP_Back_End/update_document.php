
<?php

include 'db_connection.php';

if (isset($_POST['title']) && isset($_POST['path']) && isset($_POST['description'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $path = $_POST['path'];
    $description = $_POST['description'];

    $sql = "UPDATE documents
            SET title='$title', filepath='$path', description='$description'
            WHERE documents.ID = $id";

    $con->query($sql);
    $con -> close();

    header("Location: ../documents.php");

}
else {
    header("Location: ../tutor_update_document.php");
    exit();
}

?>