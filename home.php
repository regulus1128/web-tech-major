<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
  </head>
<body>
    <div class="header">
        <nav>
            <a href="#" class="text-decoration-none">Home</a>
            <a href="#" class="text-decoration-none">About</a>
            <a href="#" class="text-decoration-none">Contact Us</a>
        </nav>
    </div>
    
    <div class="main">
        <div class="info">

            <h2>This is the homepage</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ab animi fuga corrupti aliquam unde, quo quia optio illo veritatis dolorum cupiditate tenetur, quos porro neque nihil, in sunt repudiandae!</p>
        </div>
            
            <div class="section">

                <div class="login">
                    <form action="login.php" method="post">
                        
                        <input type="submit" value="Login">            
                    </form>
                </div>
                
                <div class="register">
                    <form action="registration.php" method="post">
                        
                        <input type="submit" value="Register">            
                    </form>
                </div>
            </div>

            <div class="activeusers">
                <form action="activeusers.php" method="post">
                <input type="submit" value="Show active users">            
                    
                </form>
            </div>
        
    </div>

    
    
</body>
</html>