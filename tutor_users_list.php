<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/61e165c770.js" crossorigin="anonymous"></script>
    <title>Εγγεγραμένοι Χρήστες</title>
</head>
<body>
    
    <div class="main flex-column">

        <div class="flex header teal big-border-bottom"> 
            <a href="home_page.php"><i class="fa-sharp fa-2xl fa-solid fa-house header-icon pad-left teal"></i></a>
            <h1> Εγγεγραμένοι Χρήστες </h1> 
            <div class="flex">             
                <?php
                    session_start();
                    if ($_SESSION['role'] === "Tutor") {
                    echo "<a href='tutor_users_list.php' > <i class='fa-solid fa-2xl teal fa-users header-icon pad-right'></i></a>";
                    }
                ?>
                <a href="PHP_Back_End/logout.php"><i class="fa-solid fa-2xl fa-right-from-bracket header-icon pad-right teal"></i></a>
            </div>
        </div>
        
        <div class="content">
            <?php 
                include "links.php";
            ?>
            <div class="description-container thin-border">
                <?php
                    session_start();
                    if ($_SESSION['role'] === 'Tutor' ) {
                    echo "<div class='announcement'>
                            <div class='announcement-heading'>
                                <h4> <a class='important-text' href='tutor_user.php'>Προσθήκη νέου χρήστη</a> </h4>
                            </div>
                            <div class='announcement-content big-border-bottom flex'></div>
                         </div>";
                    }
                ?>
                <?php
                        include("PHP_Back_End/db_connection.php");
                        $sql = "SELECT id, firstName, lastName, loginame, password, role FROM users;";
                        $res = $con->query($sql);

                        while ($user = mysqli_fetch_row($res)) {
                            $fullName = $user[1] + " " + $user[2];
                            echoUser($user[0], $user[1], $user[2], $user[3], $user[4], $user[5], $fullName);
                        }

                        mysqli_close($con); 
                        
                        function echoUser($id, $firstName, $lastName, $loginame, $password, $role, $fullName) {
                            echo "
                                <div class='announcement teal'> 
                                    <div class='announcement-heading'>
                                        <h2 class='teal'>$fullName</h2>
                                        <div class='flex'>
                                            <form action='tutor_user.php' action='get'>
                                                <button class='announcement-button' name='id' value=$id><a class='important-text'>Eπεξεργασία</a></button>
                                            </form>
                                            <form action='PHP_Back_End/handle_user.php' action='get'>
                                                <input class='hidden' name='type' value='delete'></input>
                                                <button class='announcement-button' name='id' value=$id><a class='important-text'>Διαγραφή</a></button>
                                            </form>
                                        </div>
                                    </div>
                                
                                    <div class='announcement-content big-border-bottom flex'>
                                    
                                    </div>        
                                </div>";
                        }

                ?>

                <div class="top">
                    <a class="link left100 teal" href="#header">Top</a>
                </div>  

            </div>
        </div>

    </div>
</body>
</html>