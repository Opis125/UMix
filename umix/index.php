<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link class="tab" rel="icon" href="media/favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>UMix</title>
</head>
<body>
    <div class="main-nav">
        <nav>
            <ul class="nav-text">
                <img class="nav-logo" src="/media/umix logo.png">
                <button class="play-button"><a href='play.php'>PLAY</a></button>
                <li><a href="#" class="home">HOME</a></li>
                <li><a href="#" class="profile">PROFILE</a></li>
                <li><a href="#" class="studio">STUDIO</a></li>
                <li><a href="#" class="achievements">ACHIEVEMENTS</a></li>
                <li><a href="#" class="store">STORE</a></li>
                <?php
                if(isset($_SESSION["useruid"])){
                    echo "<li><a href='profile.php'>PROFILE </a></li>";
                    echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
                }else{
                    header("location: ../login.php");
                    exit();
                }
                ?>
            </ul>
        </nav> 
    </div>
    <div class="profile-box">
        <img class="avatar" src="/media/opus125.jpg" alt="avatar">
        <h1 class="username-display">OPUS 125</h1>
        <p class="online-status-circle">⬤</p>
        <h2 class="online-status">online</h2>
    </div>   
    <div class="social-box">
        <h1 class="friends-list">FRIENDS</h1>
    </div>

</body>
</html>