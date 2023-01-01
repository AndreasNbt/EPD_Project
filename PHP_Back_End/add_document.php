
<?php

include 'db_connection.php';

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['path'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $path = $_POST['path'];

    $sql = "INSERT INTO documents(title, description, filepath)
            VALUES ('$title', '$description', '$path')";

        $con->query($sql);
        $con -> close();

        header("Location: ../documents.php");

}
else {
    header("Location: ../tutor_new_document.php");
    exit();
}

?>