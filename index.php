<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Belajar OOP Sanbercode</title>
</head>

<body>
	<?php
	require 'animal.php';
	require 'frog.php';
	require 'ape.php';
	$sheep = new Animal("shaun");

	echo $sheep->name; // "shaun"
	echo $sheep->legs; // 2
	echo $sheep->cold_blooded; // false
	
		
	// index.php
	$sungokong = new Ape("kera sakti");
	echo $sungokong->name;
	echo $sungokong->legs;
	echo $sungokong->yell(); // "Auooo"

	$kodok = new Frog("buduk");
	echo $kodok->name;
	echo $kodok->legs; 
	echo $kodok->jump(); // "hop hop"
	?>
</body>
</html>