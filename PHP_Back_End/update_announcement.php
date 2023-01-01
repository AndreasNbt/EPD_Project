
<?php

include 'db_connection.php';

if (isset($_POST['subject']) && isset($_POST['date']) && isset($_POST['content'])) {

    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $content = $_POST['content'];

    $sql = "UPDATE announcements
            SET subject='$subject', date='$date', content='$content'
            WHERE announcements.ID = $id";

    $con->query($sql);
    $con -> close();

    header("Location: ../announcement.php");

}
else {
    header("Location: ../tutor_update_announcement.php");
    exit();
}

?>