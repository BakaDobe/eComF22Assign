<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List of items</title>
</head>
<body>
	<h1>Items list</h1>
	<ul>
		<?php
			foreach ($data['items'] as $item) {
			 	echo "<li>$item->name</li>";
			 } 
		?>
	</ul>
</body>
</html>