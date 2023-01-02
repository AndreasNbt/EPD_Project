<?php

    session_start();
    include ("db_connection.php");

    if (isset($_POST['email']) &&  isset($_POST['password'])) {  

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `users`
                WHERE '$email' = users.loginame
                AND '$password' = users.password;";

        $res = $con->query($sql);

        if (mysqli_num_rows($res) === 1 ){

            $row = mysqli_fetch_row($res);

            $_SESSION['ID'] = $row[0];
            $_SESSION['role'] = $row[5];

            $con -> close();

            header("Location: ../home_page.php");

        }
        else {
            header("Location: ../index.php?error=UserNotFound");
            exit();
        }
    }
    else {
        header("Location: ../index.php");
        exit();
    }

?>