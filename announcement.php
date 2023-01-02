<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/61e165c770.js" crossorigin="anonymous"></script>
    <title>Ανακοινώσεις</title>
</head>
<body>
    
    <div class="main flex-column">
        <div class="flex header teal big-border-bottom"> 
            <a href="home_page.php"><i class="fa-sharp fa-2xl fa-solid fa-house header-icon pad-left teal"></i></a>
            <h1> Ανακοινώσεις </h1> 
            <a href="PHP_Back_End/logout.php"><i class="fa-solid fa-2xl fa-right-from-bracket header-icon pad-right teal"></i></a>
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
                                <h4> <a class='important-text' href='tutor_announcement.php'>Προσθήκη νέας ανακοίνωσης</a> </h4>
                            </div>
                            <div class='announcement-content big-border-bottom flex'></div>
                         </div>";
                    }
                ?>
                <?php
                    include("PHP_Back_End/db_connection.php");
                    $sql = "SELECT id, date, subject, content FROM announcements;";
                    $res = $con->query($sql);

                    while ($announcement = mysqli_fetch_row($res)) {
                        echoAnnouncement($announcement[0], $announcement[1], $announcement[2], $announcement[3]);
                    }

                    mysqli_close($con);

                    function echoAnnouncement($id, $date, $subject, $content) {
                    echo "<div class='announcement teal'> 
                            <div class='announcement-heading'>
                                <h2 class='teal'>$subject</h2>
                                <div class='flex'>
                                    <form action='tutor_announcement.php' action='get'>
                                        <button class='announcement-button' name='id' value=$id><a class='important-text'>Eπεξεργασία</a></button>
                                    </form>
                                    <form action='PHP_Back_End/handle_announcement.php' action='get'>
                                        <input class='hidden' name='type' value='delete'></input>  
                                        <button class='announcement-button' name='id' value=$id><a class='important-text'>Διαγραφή</a></button>
                                    </form>
                                </div>
                                
                            </div>
                            
                            <div class='announcement-content big-border-bottom'>
                                <p> <strong>Ημερομηνία</strong>: $date</p>
                                <p> <strong>Θέμα</strong>: $subject</p>
                                <p>$content</p>
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