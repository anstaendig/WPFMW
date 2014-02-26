<?php
    session_start();

    echo 'Hallo '.$_SESSION['name'];

    if (!isset($_SESSION['loggedin'])) {
        header('Location: http://localhost/index.php?site=index.php');
    }
?>