<?php // Script 13.1 - mysqli_connect.php

// conncect
$dbc = mysqli_connect('localhost', 'root', 'Jef2180287', 'myquotes');

//set character set
mysqli_set_charset($dbc, 'utf8');