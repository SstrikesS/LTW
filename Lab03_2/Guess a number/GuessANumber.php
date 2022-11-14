<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guess a number</title>
</head>
<body>
	<font size=4 color="blue">Please enter your number</font>
	<br>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
		<input type="number" name="pick" value="<?php if(isset($_GET["pick"])){echo $_GET["pick"];}?>">
		<br></br>
		<input type="submit" value="submit">
		<input type="reset" value="reset">
		<br></br>
		<?php
			if(isset($_GET["pick"])){
				session_start();
				if (!isset($_SESSION['secret_random_number'])){
					$_SESSION['secret_random_number'] = rand(0, 100);
					$_SESSION['guess_count'] = 0;
				}
				$guess_count = $_SESSION['guess_count'] + 1;
				$_SESSION['guess_count'] = $guess_count;
				$rand_number = $_SESSION['secret_random_number'];
				print "Random number is $rand_number";
				print "<br>";
				if(empty($_GET["pick"])){
					print "You need to enter a number!";
				}elseif(!empty($_GET["pick"])){
					$pick = $_GET["pick"];
					$guess_count++;
					if($pick < $rand_number){
						print "Wrong. Please try a higher number. You have guessed $guess_count time!";
					}elseif($pick > $rand_number){
						print "Wrong. Please try a lower number. You have guessed $guess_count time!";
					}elseif($pick == $rand_number){
						print "Correct. You got it!. You have guessed $guess_count time!";
						$_SESSION['secret_random_number'] = rand(0, 100);
						$_SESSION['guess_count'] = -1;
					}else{
						print "<br>Illegal state error!";
					}
				}
			}
		?>
	</form>
</body>
</html>
