<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Σύνδεση</title>
</head>
<body>
    
    <div class="main flex-column">

        <div class="header teal big-border-bottom"> 
            <h1> Συνδεθείτε στη σελίδα </h1> 
        </div>
        
            <div class="content"> 
                <div class="login-container flex-column teal big-border center">  
                    <h2 class="teal mb">Συμπληρώστε τα στοιχεία σας</h2>
                    <div class="flex-column inputs-container mt">
                        <form action="PHP_Back_End/loginb.php" method="post">
                            <div class="flex-column">
                                <label for="email">Email</label>
                                <input id="email" type="text" class="input-field announcement-field thin-border" name="email" required>
                            </div>
                            <br>
                            <div class="flex-column">
                                <label for="password">Κωδικός</label>
                                <input id="password" type="password" class="input-field announcement-field thin-border" name="password" required>
                            </div>
                            <br>
                           
                            <button class="sign-btn thin-border teal" type="submit">Σύνδεση</button>
                        </form>
                    </div>
                        <br>
                        
                    
                </div>
            </div>
    </div>
    

</body>
</html>