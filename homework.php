<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/61e165c770.js" crossorigin="anonymous"></script>
    <title>Εργασίες</title>
</head>
<body>
   <div class="main flex-column">
        <?php
            $page_title = "Εργασίες";
            include "header.php";
        ?>
        
        <div class="content">
            <?php 
                include "links.php";
            ?>
            <div class="description-container thin-border">  
            <?php
                    if ($_SESSION['role'] === 'Tutor' ) {
                    echo "<div class='announcement'>
                            <div class='announcement-heading'>
                                <h4> <a class='important-text' href='tutor_project.php'>Προσθήκη νέας εργασίας</a> </h4>
                            </div>
                            <div class='announcement-content big-border-bottom flex'></div>
                         </div>";
                    }
                ?>
            <?php
                    include("PHP_Back_End/db_connection.php");
                    $sql = "SELECT id, goals, filepath, deliverables, deadline FROM projects;";
                    $res = $con->query($sql);

                    while ($project = mysqli_fetch_row($res)) {
                        echoProject($project[0], $project[1], $project[2], $project[3], $project[4]);
                    }

                    mysqli_close($con);

                    function echoProject($id, $goals, $file,$deliverables,$deadline) {
                    echo "<div class='announcement teal'> 
                            <div class='announcement-heading'>
                                <h2 class='teal'>Εργασία $id</h2>
                                <div class='flex'>
                                    <form action='tutor_project.php' action='get'>
                                        <button class='announcement-button' name='id' value=$id><a class='important-text'>Eπεξεργασία</a></button>
                                    </form>
                                    <form action='PHP_Back_End/handle_project.php' action='get'>
                                        <input class='hidden' name='type' value='delete'></input>
                                        <button class='announcement-button' name='id' value=$id><a class='important-text'>Διαγραφή</a></button>
                                    </form>
                                </div>
                            </div>
                        
                            <div class='announcement-content big-border-bottom flex'>
                                <div class='flex-column'>
                                <p> <strong>Στόχοι:</strong> Οι στόχοι της εργασίας είναι </p>
                                <div>
                                    <ol class='m0'>
                                        $goals
                                    </ol>
                                </div>
                                
                                <p> <strong>Εκφώνηση:</strong> </p>
                                <div>
                                    <p class='m0 ml'>    Κατεβάστε την εκφώνηση της εργασίας από <a class='important-text' href='$file' download>εδώ</a>.</p>
                                </div>
                                
                                <p> <strong>Παραδοτέα:</strong> </p>
                                <div class='mb'>
                                    <ol class='m0'>
                                        $deliverables
                                    </ol>
                                </div>
                                
                                <p class='important-text'>Ημερομηνία παράδοσης: $deadline</p> 
                            </div>
                          </div>";
                    }
                    
                ?>
                </div>

                <div class="top">
                    <a class="link left100 teal" href="#return">Top</a>
                </div>  
                
            </div>
        </div>

    </div>
</body>
</html>