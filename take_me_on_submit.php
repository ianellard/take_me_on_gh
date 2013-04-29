<?php
	$db=mysql_connect("localhost", "root", "imysqle060486", "take_me_on");

	if (!$db){
		die("Failed to connect to MySQL.");	
	}
	
	$db_select = mysql_select_db("take_me_on", $db);
		if (!$db_select) {
			die("Database connection failed.");
	}
	$name = $_POST["name"];
	$prose = $_POST["prose"];
	mysql_query("INSERT INTO submissions (`submissionid`, `name`, `prose`) VALUES (NULL, '$name', '$prose');");
	?>

<html>
<head>
	<LINK href="TMO_CSS.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header"><h1>Take Me On (alpha)</h1></div>
<div>
	Hi there, <?php echo $_POST["name"]; ?>!<br>
	You just submitted the following prose: <br>
	<?php echo $_POST["prose"];?>
</div>
<div class="footer">
	<?php
date_default_timezone_set('Europe/London');
echo "Today's date is ". date('d-m-y'); 
	?>
</div>
</body>
</html>