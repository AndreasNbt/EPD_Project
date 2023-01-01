<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Νέα Εργασία</title>
</head>
<body>
    
    <div class="main flex-column">

        <div class="header teal big-border-bottom"> 
            <h1> Προσθέστε μία νέα εργασία </h1> 
        </div>
        
            <div class="content flex jc-center"> 
                <div class="description-container flex-column teal big-border center p0">  
                    <h2 class="teal mb">Συμπληρώστε τα πεδία</h2>
                    <div class="flex-column mt">
                        <form action="PHP_Back_End/add_project.php" method="post">
                            <div class="flex-column">
                                <label for="goals">Στόχοι</label>
                                <textarea id="goals" type="text" class="input-field announcement-field thin-border" name="goals" cols="30" rows="8" required></textarea>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="path">Αρχείο Εκφώνησης</label>
                                <input id="path" type="text" class="input-field thin-border announcement-field center" name="path" required>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="deliverables">Παραδοτέα</label>
                                <textarea id="deliverables" class="input-field announcement-field thin-border" name="deliverables" cols="30" rows="8" required></textarea>
                            </div>
                            <div class="flex-column">
                                <label for="deadline">Deadline</label>
                                <input id="deadline" type="date" class="input-field announcement-field thin-border" name="deadline">
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