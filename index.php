<?php session_start(); ?>
<?php //$_SESSION["first_name"] = "Maile"; 
		//$_SESSION["last_name"] = "Rohiväli";
		//$_SESSION["email"] = "maile.rohivali@khk.ee";
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 9. praktikum</title>
</head>

<body>
	<pre><?php print_r($_SESSION); ?></pre>
	<a href="teine.php">Teine leht</a>
</body>
</html>