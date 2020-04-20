<!doctype html>
<html long="en">
<head>
	<meta charset="utf-8">
	<title>Connect to MySQL</title>
</head>
<body>
<?php //Script 12.1 - mysqli_connect.php #@

if ($dbc = @mysqli_connect('localhost', 'root', 'Jef2180287', 'myblog')) {

	print '<p>Successfully connected to the database!</p>';
	
	mysqli_close($dbc);  // close the connection
	
} else {

	print '<p style ="color: red;">Could not connect to the database:<br>'
	. mysqli_conncet_error() . '..</p>';
}

?>
</body>
</html>