<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa <br>
        <input type="radio" name="credit_card" value="Przelewy24">
        Przelewy24 <br>
        <input type="radio" name="credit_card" value="Blik">
        Blik <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    if ( isset($_POST["confirm"]) ) {

        $credit_card = null;

        if ( isset($_POST['credit_card'])  ) {
            $credit_card = $_POST['credit_card'];
            echo" Your choice is: {$credit_card} ";
        }
        else {
            echo' Please make a choice';
        }
    }
?>

