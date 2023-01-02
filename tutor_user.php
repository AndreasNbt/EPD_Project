<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/61e165c770.js" crossorigin="anonymous"></script>
    <title>Χρήστης</title>
</head>
<body>

    <?php

        include "PHP_Back_End/db_connection.php";

        $page_title = "Προσθήκη νέου χρήστη";
        $value = "add";

        $firstName = "";
        $lastName = "";
        $loginame = "";
        $password = "";
        $role = "";

        if (isset($_GET['id'])) {
            $userID = $_GET['id'];
            $page_title = "Ενημέρωση πληροφοριών χρήστη";
            $value = "update";

            $sql = "SELECT firstName, lastName, loginame, password, role
                    FROM users
                    WHERE users.ID = $userID";

            $res = $con->query($sql);
            $row = mysqli_fetch_row($res);

            $firstName = $row[0];
            $lastName = $row[1];
            $loginame = $row[2];
            $password = $row[3];
            $role = $row[4];

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
                        <form action="PHP_Back_End/handle_user.php" method="post">
                            <div class="flex-column">
                                <label for="firstName">Όνομα</label>
                                <?php echo" <input id='firstName' type='text' class='input-field announcement-field thin-border' name='firstName' value='$firstName' required>" ?>
                                
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="lastName">Επίθετο</label>
                                <?php echo" <input id='lastName' type='text' class='input-field thin-border announcement-field center' name='lastName' value='$lastName' required>" ?>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="email">Email</label>
                               <?php echo" <input id='email' type='email' class='input-field announcement-field thin-border' name='email' value='$loginame' required>" ?>
                            </div>
                            <div class="flex-column">
                                <label for="password">Κωδικός</label>
                               <?php echo" <input id='password' type='text' class='input-field announcement-field thin-border' name='password' value='$password' required>" ?>
                            </div>
                            <div class="flex-column">
                                <label for="role">Ρόλος</label>
                               <?php echo" <input id='role' type='text' class='input-field announcement-field thin-border' name='role' value='$role' required>" ?>
                            </div>
                            <?php 
                                echo" <input class='hidden' name='type' value='$value'></input>";
                                if ($value === "add") {
                                    echo"<button class='sign-btn thin-border teal' type='submit'>Προσθήκη</button>";
                                }
                                else if ($value === "update") {
                                    echo " <button class='sign-btn thin-border teal' name='id' value=$userID type='submit'>Ενημέρωση</button>"; 
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