<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/61e165c770.js" crossorigin="anonymous"></script>
    <title>Ενημέρωση Εγγράφου</title>
</head>
<body>

    <?php

        include "PHP_Back_End/db_connection.php";

        $page_title = "Προσθήκη νέου εγγράφου";
        $value = "add";

        $title = "";
        $path = "";
        $description = "";

        if (isset($_GET['id'])) {
            $documentID = $_GET['id'];
            $page_title = "Ενημέρωση εγγράφου";
            $value = "update";

            $sql = "SELECT title, filepath, description
                    FROM documents
                    WHERE documents.ID = $documentID";

            $res = $con->query($sql);
            $row = mysqli_fetch_row($res);

            $title = $row[0];
            $path = $row[1];
            $description = $row[2];

            $con -> close();
        }
    ?>
    
    <div class="main flex-column">

        <div class="flex header teal big-border-bottom"> 
            <a href="home_page.php"><i class="fa-sharp fa-2xl fa-solid fa-house header-icon pad-left teal"></i></a>
            <?php echo"<h1> $page_title </h1>" ?> 
            <a href="PHP_Back_End/logout.php"><i class="fa-solid fa-2xl fa-right-from-bracket header-icon pad-right teal"></i></a>
        </div>
        
            <div class="content flex jc-center"> 
                <div class="description-container flex-column teal big-border center p0">  
                    <h2 class="teal mb">Συμπληρώστε τα πεδία</h2>
                    <div class="flex-column mt">
                        <form action="PHP_Back_End/handle_document.php" method="post">
                            <div class="flex-column">
                                <label for="title">Τίτλος</label>
                                <?php echo" <input id='title' type='text' class='input-field announcement-field thin-border' name='title' value='$title' required>" ?>
                                
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="path">Τοποθεσία Αρχείου</label>
                                <?php echo" <input id='path' type='text' class='input-field thin-border announcement-field center' name='path' value='$path' required>" ?>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="description">Περιγραφή</label>
                               <?php echo" <textarea id='description' class='input-field announcement-field thin-border' name='description' cols='30' rows='10'>$description</textarea>" ?>
                            </div>
                            <?php 
                                echo" <input class='hidden' name='type' value='$value'></input>";
                                if ($value === "add") {
                                    echo"<button class='sign-btn thin-border teal' type='submit'>Προσθήκη</button>";
                                }
                                else if ($value === "update") {
                                    echo " <button class='sign-btn thin-border teal' name='id' value=$documentID type='submit'>Ενημέρωση</button>"; 
                                } 
                            ?>
                        </form>
                    </div>
                        <br>
                        
                    
                </div>
            </div>
    </div>
    

</body>
</html>