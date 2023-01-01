<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Ανακοινώσεις</title>
</head>
<body>
    
    <div class="main flex-column">

        <div id="header" class="header teal big-border-bottom"> 
            <h1> Ανακοινώσεις </h1> 
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
                                <h3> <a class='important-text' href='new_announcement.php'>Προσθήκη νέας ανακοίνωσης</a> </h3>
                            </div>
                            <div class='announcement-content flex'></div>
                         </div>";
                    }
                ?>
                <?php
                    include("PHP_Back_End/db_connection.php");
                    $sql = "SELECT date, subject, content FROM announcements;";
                    $res = $con->query($sql);

                    while ($announcement = mysqli_fetch_row($res)) {
                        echoAnnouncement($announcement[0], $announcement[1], $announcement[2]);
                    }

                    mysqli_close($con);

                    function echoAnnouncement($date, $subject, $content) {
                    echo "<div class='announcement teal'> 
                            <div class='announcement-heading'>
                                <h2 class='teal'>$subject</h2>
                            </div>
                            
                            <div class='announcement-content'>
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