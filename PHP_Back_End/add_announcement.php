
<?php

    include 'db_connection.php';

    if (isset($_POST['subject']) && isset($_POST['date']) && isset($_POST['content'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $subject = validate($_POST['subject']);
        $date = validate($_POST['date']);
        $content = validate($_POST['content']);

        if (empty($subject)) {
            header("Location: ../login.php?error=Subject is required");
            exit();
        }
        else if (empty($content)) {
            header("Location: ../password.php?error=Password is required");
            exit();
        }
        else {

            $sql = "INSERT INTO announcements(subject, date, content)
                    VALUES ('$subject', $date, '$content')";

            $con->query($sql);
            $con -> close();

            header("Location: ../announcement.php");

            }
    }
    else {
        header("Location: ../tutor_new_announcement.php");
        exit();
    }

?>