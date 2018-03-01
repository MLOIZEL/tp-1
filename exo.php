<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
	<a href="?message=Hello">Afficher n°1</a>
	
	<a href="?message=victor">Afficher n°2</a>
	
	<a href="?message=florian">Afficher n°3</a>
	
<?php
echo("Hello !");
echo "Vous êtes sur la page pour ".$_GET["message"];
?>
</body>
</html>