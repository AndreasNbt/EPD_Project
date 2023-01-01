<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Έγγραφα Μαθήματος</title>
</head>
<body>
    
    <div class="main flex-column">

        <div id="header" class="header teal big-border-bottom"> 
            <h1> Έγγραφα Μαθήματος </h1> 
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
                        $sql = "SELECT title, description, filepath FROM documents;";
                        $res = $con->query($sql);

                        while ($document = mysqli_fetch_row($res)) {
                            echoDocument($document[0], $document[1], $document[2]);
                        }

                        mysqli_close($con); 
                        
                        function echoDocument($title, $description, $file) {
                            echo "
                                <div class='announcement teal'> 
                                    <div class='announcement-heading'>
                                        <h2 class='teal'>$title</h2>
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