<?php

    session_start();
    include ("db_connection.php");

    if (isset($_POST['email']) &&  isset($_POST['password'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        

        $email = validate($_POST['email']);
        $password = validate($_POST['password']);

        if (empty($email)) {
            header("Location: ../login.php?error=Email is required");
            exit();
        }
        else if (empty($password)) {
            header("Location: ../password.php?error=Password is required");
            exit();
        }
        else {

            $sql = "SELECT * 
                    FROM user
                    WHERE (user.loginame = '$email' 
                        AND user.password = '$password' ";

            $res = $con->query($sql);

            if (mysqli_num_rows($res) === 1 ){

                $row = mysqli_fetch_row($res);

                $_SESSION['ID'] = $row[0];
                $_SESSION['Username'] = $row[1];
                $_SESSION['role'] = $row[4];

                echo "$_SESSION[role]";

                $con -> close();

                header("Location: ../home_page.php");

            }
            else {
                header("Location: ../login.php?error=User not found");
                exit();
            }
        }
    }
    else {
        header("Location: ../login.php");
        exit();
    }

?>