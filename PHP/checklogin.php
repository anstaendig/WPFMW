<?php 
	session_start(); 
	error_reporting(E_ALL);
	ob_start();
	$host="db517273443.db.1and1.com:3306"; // Host name 
	$username="dbo517273443"; // Mysql username 
	$password="cMM2749b"; // Mysql password 
	$db_name="db517273443"; // Database name 
	$tbl_name="users"; // Table name 

	mysql_connect("$host", "$username" , "$password") or die ("Cannot connect to database."); 
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
		header("Location: http://ignatz-radstroem.com/index?site=login_success");
		exit(); 
    } else { 
    	header("Location: http://ignatz-radstroem.com/index?site=login_serror");
    	exit(); 
    };
?>