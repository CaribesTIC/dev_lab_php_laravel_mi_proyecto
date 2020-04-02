<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar un libro</title>
</head>
<body>
	<h1>
		<?=$libro['name']?>
	</h1>
	<p>
		Por <?=$libro['author']?>
		<br>
		ISBN: <?=$libro['isbn']?>
	</p>
</body>
</html>
