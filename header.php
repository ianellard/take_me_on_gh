<?php
$header= "<html>
<head>
	<LINK href="TMO_CSS.css" rel="stylesheet" type="text/css">
</head>
<title>Take me on! by Faber and Faber</title>
<body>
<div class="header">
	<h1><a href="http://localhost/~iane/TMO_test/TMO_html.php">Take Me On (alpha)</a></h1>
		<form name="editor_login_form" action="editor_login.php" method="post" id="editor_login_form">	
			<a href="http://localhost/~iane/TMO_test/editor_sign_up.php" id="sign_up">Not signed up?</a>
			<input type="text" name = "username_login" value="Username" id="username_login" onfocus="if(this.value=='Username')this.value='';">
			<input type="password" name = "password_login" value="Password" id="password_login" onfocus="if(this.value=='Password')this.value='';">
			<input type="submit" id="editor_login" value="Log in">
		</form>
</div>";
echo $header;
?>

