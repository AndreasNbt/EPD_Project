<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/61e165c770.js" crossorigin="anonymous"></script>
    <title>Έγγραφα Μαθήματος</title>
</head>
<body>
    
    <div class="main flex-column">

        <div class="flex header teal big-border-bottom"> 
            <a href="home_page.php"><i class="fa-sharp fa-2xl fa-solid fa-house header-icon pad-left teal"></i></a>
            <h1> Έγγραφα Μαθήματος </h1> 
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
                                <h4> <a class='important-text' href='tutor_new_document.php'>Προσθήκη νέου εγγράφου</a> </h4>
                            </div>
                            <div class='announcement-content big-border-bottom flex'></div>
                         </div>";
                    }
                ?>
                <?php
                        include("PHP_Back_End/db_connection.php");
                        $sql = "SELECT id, title, description, filepath FROM documents;";
                        $res = $con->query($sql);

                        while ($document = mysqli_fetch_row($res)) {
                            echoDocument($document[0], $document[1], $document[2], $document[3]);
                        }

                        mysqli_close($con); 
                        
                        function echoDocument($id, $title, $description, $file) {
                            echo "
                                <div class='announcement teal'> 
                                    <div class='announcement-heading'>
                                        <h2 class='teal'>$title</h2>
                                        <div class='flex'>
                                            <form action='tutor_update_document.php' action='get'>
                                                <button class='announcement-button' name='id' value=$id><a class='important-text'>Eπεξεργασία</a></button>
                                            </form>
                                            <form action='PHP_Back_End/delete_document.php' action='get'>
                                                <button class='announcement-button' name='id' value=$id><a class='important-text'>Διαγραφή</a></button>
                                            </form>
                                        </div>
                                    </div>
                                
                                    <div class='announcement-content big-border-bottom flex'>
                                        <div class='flex-column'>
                                                <p> <strong>Περιγραφή:</strong> $description </p>
                                                <a class='mb teal bold' href='$file' download>Download</a>
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