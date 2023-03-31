<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$s = new Session_helpers();
$url = new Url_helpers();
$usr = new Users();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usr->register();

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../../../public/static/register.css">
    </head>
    <body>
        <form action="register.php" method="post">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name"><br><br>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email"><br><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br><br>
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" placeholder="Confirm Password"><br><br>
            <p><input type="submit" id="submit" name="submit" value="Submit" /></p>
        </form>
    </body>
</html>
