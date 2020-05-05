<!doctype html>
<html long="en">
<head>
	<meta charset="utf-8">
	<title>Creat a Table</title>
</head>
<body>
<?php //Script 12.3 - creat_talbe.php

if ($dbc = @mysqli_connect('localhost', 'root', 'Jef2180287', 'myquotes')) {

	$query = 'CREATE TABLE quotes (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	quote TEXT NOT NULL,
	source varchar(100) NOT NULL,
	favorite TINYINT(1) UNSIGNED NOT NULL,
	date_entered TIMESTAMP NOT NULL
		DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id))
	CHARACTER SET utf8 ';
	
	if (@mysqli_query($dbc, $query)) {
		print '<p>The table has been created!</p>';
	} else {
		print '<p style="color: red;">Could not create the table because:<br>'
		 . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query .'</p>';
	}
	
	mysqli_close($dbc);
	
} else {
	print '<p style="color: red;">Could not connect to the database:<br>'
	 . mysqli_connect_error() . '.</p>';
}
?>
</body>
</html>