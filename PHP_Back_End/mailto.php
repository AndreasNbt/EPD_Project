<?php 
if(isset($_POST['submit'])){

    include "db_connection.php";

    $sql = "SELECT loginame 
            FROM users
            WHERE users.Role = 'Tutor'";

    $res = $con->query($sql);

    $results = array();
    while($row = mysqli_fetch_row($res))
    {
        $results[] = $row[0];
    }
    $to = implode(", ", $results);

    $from = $_POST['sender']; 
    $subject = $_POST['subject'];

    $message = $_POST['message'];
    
    $from = "From:" . $from;
    
    if (mail($to,$subject,$message,$from) === true) {
        header('Location: ../communication.php');
    }
    else {
        header("Location: ../communication.php?Error-when-sending-email");
    }
    
    


    }
?>