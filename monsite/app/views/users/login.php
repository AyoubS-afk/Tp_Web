<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$s = new Session_helpers();
$url = new Url_helpers();
$usr = new Users();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (!($usr->login()))
    {
        echo '<p style="color:#FF0000; font-weight:bold;">Erreur de connexion.</p>';
        exit;
    }

    $url->redirect('login.php');

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type ="text/css" href="../../../public/static/login.css">
    </head>
    <body>
        <?php if($s->isLoggedIn()){ ?>
        <p><?php echo $_SESSION['email']; ?>,correctly authetificated</p>
        <a href="logout.php">Logout</a>
        <?php } else { ?>
        <form action="login.php" method="post">
        <label>E-mail</label>
        <input type="text" name="email" placeholder="E-mail"><br><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br><br>
        <p><input type="submit" id="submit" name="submit" value="Submit" /></p>
        </form>
        <?php } ?>
    </body>
</html>
