<?php
    // plik do używania razem z plikiem index.php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">This link goes to the login page</a><br>
    If you would like to se your informations click here:<br>
    <form action="home.php" method="post">
        <input type="submit" name="show" value="show my data">
        <input type="submit" name="hide" value="hide my data">
        <input type="submit" name="logout" value="Log out">
    </form>
</body>
</html>

<?php

    if(isset($_POST["logout"])) {
        session_destroy(); // usuwa sesję
    }
    if(isset($_POST["show"])) {
        if(!empty($_SESSION)) {
            $username =  "username: {$_SESSION["username"]} <br>";
            $password =  "password: {$_SESSION["password"]}";
            echo $username . $password;
        }
        else {
            echo "There is no data to show";
        }
    }


?>