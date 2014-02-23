<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: http://localhost/index.php?site=index.php');
    }
?>