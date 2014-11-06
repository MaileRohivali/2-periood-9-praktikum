<?php 
	session_start(); 
	$first_name = $_SESSION["first_name"]; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>teine</title>
</head>

<body>
	<pre>
		<?php print_r($_SESSION); ?>
	</pre>
	<?php echo $first_name; ?>
	<a href="index.php">Esimene leht</a>

</body>
</html>