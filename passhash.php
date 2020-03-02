<!doctype html>
<html lanf="en">
<head>
	<meta charset="utf-8">
	<title>Passhash</title>
</head>
<body>
<?php

$password = "helloclass";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo  $hashed_password;

?>

</body>
</html>