<doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Three Variables</title>
</head>
<body>
<pre>
<?php 
const BR = '<br />';
$number = 34;
$Number = 43;
$string = 'This is a string variable';
$String = 'This is a different string variable';
$array = array(0 => 'Jeffrey',
			   1 => 'Michael',
			   2 => 'Painter'
			   );
$Array = array(0 => 'October',
			   1 => 'Twenty Eighth',
			   2 => 'Nineteen Ninety One'
			   );

echo $number.BR;
echo $Number.BR;
echo $string.BR;
echo $String.BR;

echo '<pre>';
print_r($array);
print_r($Array);
echo '</pre>';

?>
</pre>
</body>
</html>