<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentifier</title>
</head>
<body>
    <header>
        <h1>Authentification</h1>
    </header>
    <form action="verifAuth.php" method="POST">
        <label for="login">Login</label><br>
        <input type="text" name="login" id="login"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" name="password"  id="password"><br><br>
        <input type="submit" value="S'authentifier">
    </form> 
    <span style= " background-color:green">
        <?php echo isset($_SESSION['authMsj'])? $_SESSION['authMsj']: ''?>
        <?php session_unset(); ?>
    </span>   
</body>
</html> 