<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../app/bootstrap.php');
require_once(APP_ROOT.'/models/User.php');
require_once(APP_ROOT.'/libraries/Database.php');
require_once(APP_ROOT.'/controllers/Users.php');
require_once(APP_ROOT.'/libraries/Controller.php');
require_once(APP_ROOT.'/libraries/Core.php');
//getUrl de Core ne fonctionne pas($_GET['url'] est vide)
//$c=new Core();
$s = new Session_helpers();
$url = new Url_helpers();
$usr = new Users();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['register'])) {
        $url->redirect('/app/users/register.php');
        exit;
    }
    if (!($usr->login()))
    {
        echo '<p style="color:#FF0000; font-weight:bold;">Erreur de connexion.</p>';
        exit;
    }

    header("Location: index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type ="text/css" href="static/login.css">
    </head>
    <body>
        <?php if($s->isLoggedIn()){ ?>
        <p><?php echo $_SESSION['email']; ?>,correctly authetificated</p>
        <a href="logout.php">Logout</a>
        <?php } else { ?>
        <form action="index.php" method="post">
        <label>E-mail</label>
        <input type="text" name="email" placeholder="E-mail"><br><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br><br>
        <p><input type="submit" id="submit" name="submit" value="Submit" /></p>
        <p><input type="submit" id="register" name="register" value="Register" /></p>
        </form>
        <?php } ?>
    </body>
</html>
