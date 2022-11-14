<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Coin Flip!</title>
</head>
<body>
		<font size=4 color="blue">Please Pick Heads or Tails!</font>
		<form action="GotFlip.php" method="post">
			<?php 
				printf("<input type=\"radio\" name=\"pick\" value=0>Heads");
				printf("<input type=\"radio\" name=\"pick\" value=1>Tails");
				printf("<br>");
			?>
			<input type="submit" value="submit">
			<input type="reset" value="restart">
		</form>
</body>
</html>