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
	<form name="submission_form" action="take_me_on_submit.php" method="post">
		<textarea name="name" cols=30 onfocus="if(this.value=='Enter your name')this.value='';">Enter your name</textarea><br>
			<textarea name="prose" rows=5 cols=30 onfocus="if(this.value=='Copy your prose in here.')this.value='';">Copy your prose in here.</textarea><br><br>
			Please select an editor: <select name="editor_select">
			<option value=1>Sarah Savitt</option>
			<option value=2>Hannah Griffiths</option>
			</select><br><br>
			  I have agreed to the terms and conditions: <input type="checkbox" name="tsandcs" value="yes"><br><br>
			<input type="submit" value="Let's do this" id="submit">
	</form>
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

