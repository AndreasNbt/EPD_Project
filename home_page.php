<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Αρχική Σελίδα</title>
</head>
<body>
    
    <div class="main flex-column">
        <div class="header teal big-border-bottom"> 
            <h1> Αρχική Σελίδα </h1> 
        </div>
            
        <div class="content">
            <?php 
                include "links.php";
            ?>
                
            <div class="description-container flex-column teal thin-border">  
                <p class="paragraph">Καλωσορίσατε στην ιστοσελίδα του μαθήματος του <strong>Σημασιολογικού Ιστού</strong>.</p>
                <p>Στόχος του μαθήματος είναι η κατανόηση της έννοιας του Σημασιολογικού Ιστού, των διαφορών του με τον παραδοσιακό Ιστό και τη χρησιμότητα του
                , καθώς και την εκμάθηση των βασικών τεχνολογιών του, όπως <strong>RDF</strong>, <strong>OWL</strong> και <strong>SPARQL</strong> . </p>
                <p>Στη σελίδα "<strong>Ανακοινώσεις</strong>" μπορείτε να βλέπετε όλες τις ανακοινώσεις σχετικές με το μάθημα.</p>
                <p>Το υλικό που παρουσιάζεται στις διαλέξεις καθώς και υλικό που υπάρχει για επιπλέον μελέτη βρίσκεται στη σελίδα "<strong>Έγγραφα Μαθήματος</strong>".</p>
                <p>Οι εργασίες του μαθήματος θα ανακοινώνονται στη σελίδα "<strong>Εργασίες</strong>".</p>
                <p>Σε περίπτωση που θέλετε να επικοινωνήσετε με κάποιον διδάσκοντα, επισκεφθείτε τη σελίδα "<strong>Επικοινωνία</strong>".</p>
                    
                <br>
                <div class="img">
                    <a href="#"><img class="thin-border" src="Semantic-Web-Explained.png" height="300" alt=""></a>
                </div>
                    
            </div>
        </div>
    </div>
</body>
</html>