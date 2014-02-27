<?php 
	session_start(); 
?> 

<?php 
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="mw"; // Database name 
	$tbl_name="users"; // Table name 

	mysql_connect("localhost", "$username" , "$password") or die ("Cannot connect to database."); 
	mysql_select_db("$db_name") or die ("Could not find database"); 

	$user = $_POST["user"]; 
	$pw = $_POST["pw"]; 

	$user = stripslashes($user);
	$pw = stripslashes($pw);
	$user = mysql_real_escape_string($user);
	$pw = mysql_real_escape_string($pw);

	$sql = "SELECT * FROM $tbl_name WHERE username = '$user' AND password = '$pw'"; 
	$result = mysql_query($sql); 
	$row = mysql_fetch_assoc($result); 

	if($row["password"] == $pw) { 
    	// $_SESSION["user"] = $user;
    	$_SESSION["rights"] = $row["rights"];
		header("location:../index.php?site=login_success"); 
    } else { 
    	header("location:../index.php?site=login_error"); 
    };
?>