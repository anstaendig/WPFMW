<?php 
    if ($_SESSION["rights"] == 0) {
        echo '<script type="text/javascript"> changeView("user1"); </script>';
    } else if ($_SESSION["rights"] == 1) {
        echo '<script type="text/javascript"> changeView("user2"); </script>';
    };
?>

<div class="container">
	You have successfully logged in.
</div>