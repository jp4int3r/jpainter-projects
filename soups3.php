<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
	</style>
</head>
<body>
<h1>Mmm...soups</h1>
<?php

$soups = [
		'Monday' => 'Clam Chowder',
		'Tuesday' => 'White Chicken Chili',
		'Wednesday' => 'Vegetarian',
		'Thursday' => 'Meatball',
		'Friday' => 'Chicken Noodle',
		'Saturday' => 'Beef Stew',
		'Sunday' => 'Minestrone',
		];
		
foreach ($soups as $day => $soup) {
	print "<p>$day: $soup</p>\n";
}


?>
</body>
</html>