<?php

    include 'db_connection.php';

    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['path'])) {

        $title = $_POST['title'];
        $description = $_POST['description'];
        $path = $_POST['path'];

        $type = $_POST['type'];

        if ($type === "add") {
            $sql = "INSERT INTO documents(title, description, filepath)
                    VALUES ('$title', '$description', '$path')";
        } else if ($type === "update" && isset($_POST['id'])) {
            $id = $_POST['id'];
            $sql = "UPDATE documents
                    SET title='$title', filepath='$path', description='$description'
                    WHERE documents.ID = $id";
        }
    }
    else if ($_GET['type'] === "delete") {
        $id = $_GET['id'];

        $sql = "DELETE FROM documents
                WHERE documents.ID = $id";
    }
    else {
        header("Location: ../tutor_new_document.php");
        exit();
    }
    $con->query($sql);
    $con -> close();
    header("Location: ../documents.php");
?>
