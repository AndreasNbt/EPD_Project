<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Επικοινωνία</title>
</head>
<body>
    
    <div class="main flex-column">

        <div class="header teal big-border-bottom"> 
            <h1> Επικοινωνία </h1>
        </div>
        
        <div class="content">
            <?php 
                include "links.php";
            ?>
            
            <div class="description-container thin-border">  
                <div class="announcement communication-block big-border-bottom teal"> 
                    <div class="announcement-heading">
                        <h2 class="teal">Αποστολή email μέσω web φόρμας</h2>
                    </div>
                    
                    <form action="mailto:tutor@csd.auth.test.gr">
                        <div class="announcement-content flex">
                            <div class="flex-column">
                                <label class="label" for="#sender"> <strong>Αποστολέας:</strong> </label>
                                <label class="label" for="#subject"><strong>Θέμα:</strong></label>
                                <label class="label" for="#content"><strong>Κείμενο:</strong></label>
                            </div>
                            
                            <div class="flex-column inputs-container">
                                <input class="input comm-field" id="sender" type="text">
                                <input class="input comm-field" id="subject" type="text">
                                <textarea class="input comm-field" cols="15" rows="8"></textarea>
                            </div>
                            
                           <div class="button-container flex">
                                <button class="button send-button teal bold thin-border" type="submit"> Αποστολή </button>
                           </div>   
                        </div>
                    </form>
                </div>
                <div class="announcement big-border-bottom large-pad-tb teal"> 
                    <div class="announcement-heading">
                        <h2 class="teal">Αποστολή email μέσω email διεύθυνσης</h2>
                    </div>
                    
                    <div class="announcement-content flex-column">
                        <p>Ενναλακτικά, μπορείτε να επικοινωνήσετε με τον διδάσκοντα στέλνοντας ένα email στην παρακάτω διεύθυνση:</p>
                        <a class="teal bold mb" href="mailto:tutor@csd.auth.test.gr">tutor@csd.auth.test.gr</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>