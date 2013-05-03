<!DOCTYPE html>

<html>
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
</div>
<div class="main">
	<fieldset>
			<legend>Let's get you signed up, shall we?</legend>
	<div id="signupcontainer">
		<form name="editor_sign_up" action="create_editor.php" method="post">
			Choose a username: <input type="text" name="new_username" cols=30 onfocus="if(this.value=='Choose a username')this.value='';" id="signup"><br><br>
			Choose a password: <input type="password" name="new_password" cols=30 onfocus="if(this.value=='Choose a password')this.value='';" id="signup"><br><br>
			Confirm your password: <input type="password" name="confirm_password" cols=30 onfocus="if(this.value=='Confirm your password')this.value='';" id="signup"><br><br>
			Enter your email address: <input type="text" name="editor_email" cols=30 onfocus="if(this.value=='Confirm your password')this.value='';" id="signup"><br><br>
			<input type="submit" value="Sign up" id="submit2">
		</form>
		</div>
	</fieldset>
	
</div>
</div>
<div class="footer">
	<h2><?php
	date_default_timezone_set('Europe/London');
	echo "Today's date is ". date('d-m-y'); 
	?></h2>
</div>
</body>
</html>

