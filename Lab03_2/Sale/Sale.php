1<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Our Shop</title>
</head>
<body>
	<font size="4" color="blue"></font>
		<?php
			$today = date('l, F d, Y');
			print "Welcome on $today to our huge blowout sale! </font>";
			$month = date('m');
			$year = date('Y');
				$dayofyear = date('z');
				if($month == 12 && $year == 2001){
					$daysleft = (365 - $dayofyear + 10);
					print "<br> There are $dayofyear sales days left";
				}elseif($month == 01 && $year == 2002){
					if($dayofyear <= 10){
						$daysleft = (10 - $dayofyear);
						print "<br> There are dayofyear sales days left";
					}else{
						print "<br> Sorry, our sale is over.";
					}
				}else{
					print "<br> Sorry, our sale is over.";
				}
			print "<br> Our Sale Ends Janurary January 10, 2002";
		?>
	</font>
</body>
</html>