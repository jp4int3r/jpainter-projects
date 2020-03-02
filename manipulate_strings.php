<!doctype html>
<html lanf="en">
<head>
	<meta charset="utf-8">
	<title>Manipulate Strings</title>
</head>
<body>
<?php
$FirstName = "Jeffrey";
$MiddleName = "Michael";
$LastName = "Painter";
$FullName = $FirstName . ' ' . $MiddleName . ' ' . $LastName;
echo str_word_count($FullName)."<br>"; // There are 3 words
echo str_ireplace('Michael', 'Hotdog', $FullName)."<br>"; // replaces Michael with Hotdog
echo strlen($FullName); // There are 23 characters in length



?>

</body>
</html>