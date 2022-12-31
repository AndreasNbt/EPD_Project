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

        <div id="header" class="header teal big-border=bottom"> 
            <h1> Ανακοινώσεις </h1> 
        </div>
        
        <div class="content">
            <?php 
                include "links.php";
            ?>
            
            <div class="description-container thin-border">  
               
                <div class="announcement teal"> 
                    <div class="announcement-heading">
                        <h2 class="teal">Αναβολή διάλεξης</h2>
                    </div>
                    
                    <div class="announcement-content">
                        <p> <strong>Ημερομηνία</strong>: 25/10/2022</p>
                        <p> <strong>Θέμα</strong>: Αναβολή επόμενης διάλεξης</p>
                        <p>Η διάλεξη της 27/10 αναβάλλεται λόγω προσωπικού κωλύματος του διδάσκοντα. Θα υπάρξει περαιτέρω ενημέρωση σχετικά με την αναπλήρωση της.</p>
                    </div>
                </div>

                <div class="announcement teal"> 
                    <div class="announcement-heading">
                        <h2 class="teal">Πρώτη εργασία του μαθήματος</h2>
                    </div>
                    
                    <div class="announcement-content">
                        <p><strong>Ημερομηνία</strong>: 15/11/2022</p>
                        <p><strong>Θέμα</strong>: Ανακοίνωση πρώτης εργασίας</p>
                        <p>Ανακοινώθηκε στην σελίδα <a class="teal bold" href="homework.html">Εργασίες</a> η πρώτη εργασία του μαθήματος.</p>
                    </div>
                </div>

                <div class="top">
                    <a class="link left100 teal" href="#header">Top</a>
                </div>                
                
            </div>
        </div>


    </div>
</body>
</html>