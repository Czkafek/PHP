<?php

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

    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br><br>
        <label>password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="login">
    </form>

    <!--<h1>Proszę wypełnić dane</h1>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa <br>
        <input type="radio" name="credit_card" value="Przelewy24">
        dupa <br>
        <input type="radio" name="credit_card" value="Blik">
        Blik <br>
        <input type="submit" name="confirm" value="confirm">
    </form>-->
</body>
</html>
<?php
    
    if ( isset($_POST["login"]) ) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
    
        header("Location: home.php"); // kieruje nas automatycznie do wyznaczonej strony

        /*echo "Username: {$_SESSION["username"]} <br>";
        echo "Password: {$_SESSION["password"]}";*/
    
        setcookie("username", $_SESSION["username"], time() + 86400, "/");
        setcookie("password", $_SESSION["password"], time() + 86400, "/");
    }

    /*if ( isset($_POST["confirm"]) ) {

        $credit_card = null;

        if ( isset($_POST['credit_card'])  ) {
            $credit_card = $_POST['credit_card'];
            echo" Your choice is: {$credit_card} ";
        }
        else {
            echo' Please make a choice';
        }
    }*/
?>

