<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="tab" rel="icon" href="media/favicon.png">
    <link rel="stylesheet" href="style.css">
    <title>UMix-Log In or Sign Up</title>
</head>
<body>
    <img class="sign-in-logo" src="media/umix logo.png">
    <img class="sign-in-background" src="media/Login Image.jpg">
    <h1 class="sign-in-call">sign in</h1>
    <form class="login-page-form" action="includes/login.inc.php" method="post">
        <input class="input-username" type="text" name="uid" placeholder="USERNAME/EMAIL"><br>
        <input class="input-password" type="password" name="pwd" placeholder="PASSWORD"><br>
        <button class="login-submit-button"type="submit" name="submit">login</button>
    </form>    
    <h1 class="register-call"><a href="signup.php">CREATE AN ACCOUNT</a></h1>
    <script src="js/main.js"></script>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields</p>";
        }
        else if($_GET["error"] == "wronglogin"){
            echo "<p>Invalid Login</p>";
        }
    }
    ?>
</body>
</html>