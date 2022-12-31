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
                <div class="announcement teal"> 
                    <div class="announcement-heading">
                        <h2 class="teal">Υλικό για RDFS</h2>
                    </div>
                
                    <div class="announcement-content flex">
                        <div class="flex-column">
                                <p> <strong>Περιγραφή:</strong> Διαφάνειες που χρησιμοποιήθηκαν στις διαλέξεις για την RDFS. </p>
                                <a class="mb teal bold" href="#" download="RDF_Schema.pdf">Download</a>
                        </div>
                            
                </div>

                <div class="announcement teal"> 
                    <div class="announcement-heading">
                        <h2 class="teal">Υλικό για SPARQL</h2>
                    </div>
                
                    <div class="announcement-content flex">
                        <div class="flex-column">
                                <p> <strong>Περιγραφή:</strong> Διαφάνειες που χρησιμοποιήθηκαν στις διαλέξεις για την SPARQL. </p>
                                <a class="mb teal bold" href="#" download="SPARQL.pdf">Download</a>
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