<doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Quotation Marks</title>
</head>
<body>

<?php

$street = '4387 Fake St';
$city = 'Houston';
$state = 'Texas';
$zip = '83940';

$address = "$street <br> $city $state $zip";

print "<p>The address is <br> $address</p>";

?>
</body>
</html>