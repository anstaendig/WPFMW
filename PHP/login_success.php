<?php 
    if (isset($_SESSION["rights"])) {
        if ($_SESSION["rights"] == 1) {
            echo '<script type="text/javascript"> changeView("user1"); </script>';
        } else if ($_SESSION["rights"] == 2) {
            echo '<script type="text/javascript"> changeView("user2"); </script>';
        } else {
            echo '<script type="text/javascript"> changeView("main"); </script>';
        }
    }
?>

<meta http-equiv="refresh" content="5; URL=index.php?site=main">

<div class="container">
    <div class="defaulttxt" id="txt">
	   You have successfully logged in. You will be redirected in five seconds...<br>
       <img src='images/loader1.gif' id='loader'>
    </div>
</div>