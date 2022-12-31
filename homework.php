<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Εργασίες</title>
</head>
<body>
    
    <div class="main flex-column">

        <div class="header teal big-border-bottom"> <h1> Εργασίες </h1> </div>
        
        <div class="content">
            <?php 
                include "links.php";
            ?>
            <div class="description-container thin-border">  
                <div class="announcement teal"> 
                    <div id="return" class="announcement-heading">
                        <h2 class="teal">1η Ομαδική Εργασία</h2>
                    </div>
                
                    <div class="announcement-content flex">
                        <div class="flex-column">
                                <p> <strong>Στόχοι:</strong> Οι στόχοι της εργασίας είναι </p>
                                <div>
                                    <ol class="m0">
                                        <li>Καλύτερη κατανόηση των εννοιών που παρουσιάστηκαν στις διαλέξεις.</li>
                                        <li>Κατασκευή μιας πρώτης οντολογίας με RDFS με χρήση όλων των βασικών εννοιών της (classes, properties...</li>
                                        <li>Χρήση SPARQL για την κατασκευή ερωτημάτων πάνω στην οντολογία</li>
                                    </ol>
                                </div>
                                
                                <p> <strong>Εκφώνηση:</strong> </p>
                                <div>
                                    <p class="m0 ml">    Κατεβάστε την εκφώνηση της εργασίας από <a class="important-text" href="" download="Project1.docx">εδώ</a>.</p>
                                </div>
                                
                                <p> <strong>Παραδοτέα:</strong> </p>
                                <div class="mb">
                                    <ol class="m0">
                                        <li>Σύντομη γραπτή αναφορά σε Word όπου περιγράφετε την διαδικασία υλοποίησης της οντολογίας σας.</li>
                                        <li>Το αρχείο της οντολογίας.</li>
                                        <li>Τα SPARQL ερωτήματα που χρησιμοποιήσατε μαζί με τα αντίστοιχα αποτελέσματα.</li>
                                    </ol>
                                </div>
                                
                                <p class="important-text">Ημερομηνία παράδοσης: 24/10/22</p> 
                            </div>
                            
                </div>

                <div class="announcement teal"> 
                    <div class="announcement-heading">
                        <h2 class="teal">2η Ομαδική Εργασία</h2>
                    </div>
                
                    <div class="announcement-content flex">
                        <div class="flex-column">
                            <p> <strong>Στόχοι:</strong> Οι στόχοι της εργασίας είναι </p>
                            <div>
                                <ol class="ordered-list">
                                    <li>Επέκταση της οντολογίας της 1ης εργασίας με τη χρήση της OWL.</li>
                                    <li>Κατανόηση και σωστή χρήση των εκφραστικών δυνατοτήτων που παρέχει η OWL</li>
                                </ol>
                            </div>
                                
                            <p> <strong>Εκφώνηση:</strong> </p>
                            <div>
                                <p class="m0 ml">    Κατεβάστε την εκφώνηση της εργασίας από <a class="important-text" href="" download="Project2.docx">εδώ</a>.</p>
                            </div>
                                
                            <p> <strong>Παραδοτέα:</strong> </p>
                            <div class="mb">
                                <ol class="ordered-list">
                                    <li>Σύντομη γραπτή αναφορά σε Word όπου περιγράφετε την διαδικασία επέκτασης της οντολογίας σας και το πως αξιοποιήσατε τις επιπλέον δυνατότητες που παρέχει η OWL σε σχέση με την RDFS.</li>
                                    <li>Το αρχείο της οντολογίας.</li>
                                </ol>
                            </div>

                            <p class="important-text">Ημερομηνία παράδοσης: 2/12/22</p> 
                                
                        </div>
                </div>

                <div class="top">
                    <a class="link left100 teal" href="#return">Top</a>
                </div>  
                
            </div>
        </div>

    </div>
</body>
</html>