<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/61e165c770.js" crossorigin="anonymous"></script>
    <title>Εργασία</title>
</head>
<body>

    <?php

        include "PHP_Back_End/db_connection.php";

        $page_title = "Προσθήκη νέας εργασίας";
        $value = "add";

        $goals = "";
        $path = "";
        $deliverables = "";
        $deadline = "";
        
        if (isset($_GET['id'])) {
            $projectID = $_GET['id'];

            $page_title = "Ενημέρωση εργασίας";
            $value = "update";

            $sql = "SELECT goals, filepath, deliverables, deadline
                FROM projects
                WHERE projects.ID = $projectID";

            $res = $con->query($sql);
            $row = mysqli_fetch_row($res);

            $goals = $row[0];
            $path = $row[1];
            $deliverables = $row[2];
            $deadline = $row[3];

            $con -> close();
        }
       

    ?>
    
    <div class="main flex-column">

        <?php
            include "header.php";
        ?>
        
            <div class="content flex jc-center"> 
                <div class="description-container flex-column teal big-border center p0">  
                    <h2 class="teal mb">Συμπληρώστε τα πεδία</h2>
                    <div class="flex-column mt">
                    <form action="PHP_Back_End/handle_project.php" method="post">
                            <div class="flex-column">
                                <label for="goals">Στόχοι</label>
                                <?php echo"<textarea id='goals' type='text' class='input-field announcement-field thin-border' name='goals' cols='30' rows='8' required>$goals</textarea>"; ?>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="path">Αρχείο Εκφώνησης</label>
                                <?php echo"<input id='path' type='text' class='input-field thin-border announcement-field center' name='path' value='$path' required>"; ?>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="deliverables">Παραδοτέα</label>
                                <?php echo"<textarea id='deliverables' class='input-field announcement-field thin-border' name='deliverables' cols='30' rows='8' required>$deliverables</textarea>"; ?>
                            </div>
                            <div class="flex-column">
                                <label for="deadline">Deadline</label>
                                <?php echo"<input id='deadline' type='date' class='input-field announcement-field thin-border' name='deadline' value='$deadline'>"; ?>
                            </div>
                            <?php 
                                echo" <input class='hidden' name='type' value='$value'></input>";
                                if ($value === "add") {
                                    echo"<button class='sign-btn thin-border teal' type='submit'>Προσθήκη</button>";
                                }
                                else if ($value === "update") {
                                    echo " <button class='sign-btn thin-border teal' name='id' value=$projectID type='submit'>Ενημέρωση</button>"; 
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