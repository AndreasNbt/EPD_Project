<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Ενημέρωση Ανακοίνωσης</title>
</head>
<body>

    <?php

        include "PHP_Back_End/db_connection.php";

        $announcementID = $_GET['id'];

        $sql = "SELECT subject, date, content
                FROM announcements
                WHERE announcements.ID = $announcementID";

        $res = $con->query($sql);
        $row = mysqli_fetch_row($res);

        $subject = $row[0];
        $date = $row[1];
        $content = $row[2];

    ?>
    
    <div class="main flex-column">

        <div class="header teal big-border-bottom"> 
            <h1> Ενημέρωση Ανακοίνωσης </h1> 
        </div>
        
            <div class="content flex jc-center"> 
                <div class="description-container flex-column teal big-border center p0">  
                    <h2 class="teal mb">Συμπληρώστε τα πεδία</h2>
                    <div class="flex-column mt">
                        <form action="PHP_Back_End/update_announcement.php" method="post">
                            <div class="flex-column">
                                <label for="email">Θέμα</label>
                                <?php echo" <input id='email' type='text' class='input-field announcement-field thin-border' name='subject' value='$subject' required>" ?>
                                
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="date">Ημερομηνία</label>
                                <?php echo" <input id='date' type='date' class='input-field thin-border announcement-field center' name='date' value=$date required>" ?>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="content">Ανακοίνωση</label>
                               <?php echo" <textarea id='content' class='input-field announcement-field thin-border' name='content' cols='30' rows='10'>$content</textarea>" ?>
                            </div>
                            
                          <?php echo" <button class='sign-btn thin-border teal' name='id' value=$announcementID type='submit'>Ενημέρωση</button> " ?>
                        </form>
                    </div>
                        <br>
                        
                    
                </div>
            </div>
    </div>
    

</body>
</html>