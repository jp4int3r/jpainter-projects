<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<?php  // Script 3.4 handle_form.php #2

ini_set('display_errors' , 1);  //Let me learn from my mistakes!


	   // This page receives the data from feedback.html.
	   // It will receive: title, name, email, response, comments, and submit in $_POST
	   
// Create shorthand versions of the vaiables:
$title = $_POST['title'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$response = $_POST['response'];
$comments = $_POST['comments'];
	   
//print the received data:
print "<p>Thank you, $title $FirstName $LastName,
for your comments.</p>
<p>You stated that you found this example to be '$response'
and added: <br>$comments</.>";

?>
</body>
</html>
	   
	   
	   