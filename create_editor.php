<?php
if (isset($_POST["new_password"])){
	
	$db=mysql_connect("localhost", "root", "imysqle060486", "take_me_on");
	if (!$db){
		die("Failed to connect to MySQL.");	
	}
	$db_select = mysql_select_db("take_me_on", $db);
		if (!$db_select) {
			die("Database connection failed.");
	}
	$new_username = mysql_real_escape_string($_POST["new_username"]);
	$new_password = mysql_real_escape_string($_POST["new_password"]);
	$confirm_password = mysql_real_escape_string($_POST["confirm_password"]);
	$editor_email = mysql_real_escape_string($_POST["editor_email"]);
	
	if($confirm_password==$new_password){
		$qstr = "INSERT INTO editor_logins(ideditor_logins, username, password, email) VALUES (NULL, '$new_username', '$new_password', '$editor_email')";
	$result = mysql_query($qstr);
	echo "Sign up successful! You can now sign in on the homepage.";
		header("refresh:1;url=http://localhost/~iane/TMO_test/TMO_html.php");
} else {
	echo "Make sure your passwords are the same, yeah?";
}
	
	#if (mysql_num_rows($result)){
	#	$return = "Heeeeere we go!";
	#	header("refresh:1;url=http://www.youtube.com/watch?v=Of2HU3LGdbo");
	#} else {
	#	$return = "You got the password incorrect!";
	#}
	#mysql_close();
}

?>
