<?php

    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'registration_practice';
    $conn = '';

    try { // Jesli serwer jest wyłączony to zamiast wyświetlać niezrozumialy error na 10 linijek wyświetlamy, krótką wyjasniającą zjawisko wiadomość
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception) {
        echo 'Could not connect to the server <br>';
    }

    if($conn) {
        echo 'You are connected!<br>';
    }
    else {
        echo 'Could not connect!<br>';
    }


?>