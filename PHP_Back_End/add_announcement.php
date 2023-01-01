
<?php

    include 'db_connection.php';

    if (isset($_POST['subject']) && isset($_POST['date']) && isset($_POST['content'])) {

        $subject = $_POST['subject'];
        $date = $_POST['date'];
        $content = $_POST['content'];

        $sql = "INSERT INTO announcements(subject, date, content)
                VALUES ('$subject', $date, '$content')";

        $con->query($sql);
        $con -> close();

        header("Location: ../announcement.php");

        }
    else {
        header("Location: ../tutor_new_announcement.php");
        exit();
    }

?>