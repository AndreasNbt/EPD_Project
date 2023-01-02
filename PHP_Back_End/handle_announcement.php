
<?php

    include 'db_connection.php';

    if (isset($_POST['subject']) && isset($_POST['date']) && isset($_POST['content']) && isset($_POST['type'])) {

        $subject = $_POST['subject'];
        $date = $_POST['date'];
        $content = $_POST['content'];

        $type = $_POST['type'];

        if ($type === "add") {
            $sql = "INSERT INTO announcements(subject, date, content)
                            VALUES ('$subject', '$date', '$content')";
        } else if ($type === "update" && isset($_POST['id'])) {
            $id = $_POST['id'];
            $sql = "UPDATE announcements
                        SET subject='$subject', date='$date', content='$content'
                        WHERE announcements.ID = $id";
        }
    }
    else if ($_GET['type'] === "delete") {
        $id = $_GET['id'];

        $sql = "DELETE FROM announcements
                WHERE announcements.ID = $id";
    }
    $con->query($sql);
    $con -> close();
    header("Location: ../announcements.php");


?>