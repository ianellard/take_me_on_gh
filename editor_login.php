<?php
if (isset($_POST["password_login"])){
	
	$db=mysql_connect("localhost", "root", "imysqle060486", "take_me_on");
	if (!$db){
		die("Failed to connect to MySQL.");	
	}
	$db_select = mysql_select_db("take_me_on", $db);
		if (!$db_select) {
			die("Database connection failed.");
	}
	$username = mysql_real_escape_string($_POST['username_login']);
	$password = mysql_real_escape_string($_POST["password_login"]);
	$qstr = "SELECT * from editor_logins where username = '$username' and password = '$password'";
	$result = mysql_query($qstr);
	if (mysql_num_rows($result)){
		$return = "Heeeeere we go!";
		header("refresh:1;url=http://www.youtube.com/watch?v=Of2HU3LGdbo");
	} else {
		$return = "You got the password incorrect!";
	}
	mysql_close();
}
echo($return);
?>
