<!DOCTYPE html>

<html>
<head>
	<LINK href="TMO_CSS.css" rel="stylesheet" type="text/css">
</head>
<title>Take me on! by Faber and Faber</title>
<body>
<div class="header"><h1>Take Me On (alpha)</h1></div>
<div>
	<form name="submission_form" action="take_me_on_submit.php" method="post">
		<fieldset>
			<legend>Take Me On - I'm ready!</legend>
			<textarea name="name" cols=30 onfocus="if(this.value=='Enter your name')this.value='';">Enter your name</textarea><br>
			<textarea name="prose" rows=5 cols=30 onfocus="if(this.value=='Copy your prose in here.')this.value='';">Copy your prose in here.</textarea><br>
			 
			  I have agreed to the terms and conditions: <input type="checkbox" name="tsandcs" value="yes"><br>
			<input type="submit" value="Let's do this" id="submit">
		</fieldset>
	</form>
</div>
<div class="footer">
	<?php
	date_default_timezone_set('Europe/London');
	echo "Today's date is ". date('d-m-y'); 
	?>
</div>
</body>
</html>

