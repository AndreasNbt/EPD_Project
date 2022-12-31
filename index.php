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
                            <i class="fa-solid fa-lg fa-envelope icon big-icon"></i>
                            <input type="text" class="input-field thin-border" placeholder="Email" name="email" required>
                            <br>
                            <i class="fa-solid fa-lg fa-lock icon big-icon"></i>
                            <input type="password" class="input-field thin-border" placeholder="Password" name="password" required>
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