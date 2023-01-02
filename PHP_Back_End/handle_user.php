
<?php

include 'db_connection.php';

if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $type = $_POST['type'];

    if ($role !== "Student" && $role !== "Tutor") {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            header("Location: ../tutor_user.php?id=$id&Invalid-Role");
            exit();
        }
        else {
            header("Location: ../tutor_user.php?Invalid-Role");
            exit();
        }
        
    }

    if ($type === "add") {
        $sql = "INSERT INTO users(firstName, lastName, loginame, password, role)
                        VALUES ('$firstName', '$lastName', '$email', '$password', '$role')";
    } else if ($type === "update" && isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "UPDATE users
                    SET firstName='$firstName', lastName='$lastName', loginame='$email', password='$password', role='$role'
                    WHERE users.ID = $id";
    }
}
else if ($_GET['type'] === "delete") {
    $id = $_GET['id'];

    $sql = "DELETE FROM users
            WHERE users.ID = $id";
}
$con->query($sql);
$con -> close();
header("Location: ../tutor_users_list.php");


?>