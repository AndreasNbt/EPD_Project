<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Νέο Έγγραφο</title>
</head>
<body>
    
    <div class="main flex-column">

        <div class="header teal big-border-bottom"> 
            <h1> Προσθέστε ένα νέο έγγραφο </h1> 
        </div>
        
            <div class="content flex jc-center"> 
                <div class="description-container flex-column teal big-border center p0">  
                    <h2 class="teal mb">Συμπληρώστε τα πεδία</h2>
                    <div class="flex-column mt">
                        <form action="PHP_Back_End/add_document.php" method="post">
                            <div class="flex-column">
                                <label for="email">Τίτλος</label>
                                <input id="email" type="text" class="input-field announcement-field thin-border" name="title" required>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="date">Αρχείο</label>
                                <input id="date" type="file" class="input-field thin-border announcement-field center" name="path" required>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="content">Περιγραφή</label>
                                <textarea id="content" class="input-field announcement-field thin-border" name="description" cols="30" rows="10"></textarea>
                            </div>
                            
                            <button class="sign-btn thin-border teal" type="submit">Προσθήκη</button>
                        </form>
                    </div>
                        <br>
                        
                    
                </div>
            </div>
    </div>
    

</body>
</html>