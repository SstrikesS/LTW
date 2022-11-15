<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Date and Time</title>
</head>
<body>
	<font size="5" color="blue">Enter 2 name and their birthdays</font>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
		<table>
			<tr>
				<td>1st. Enter name :</td>
				<td><input type="text" name="name_1" maxlength="20" size ="20" value="<?php if(isset($_GET["name_1"])) echo $_GET["name_1"] ?>"></td>
				<td>Enter date of birth :</td>
				<td><input type="text" name="date_1" value=<?php if(isset($_GET["date_1"])) echo $_GET["date_1"] ?>></td>
			</tr>
			<tr>
				<td>2nd. Enter name :</td>
				<td><input type="text" name="name_2" maxlength="20" size ="20" value="<?php if(isset($_GET["name_2"])) echo $_GET["name_2"] ?>"></td>
				<td>Enter date of birth :</td>
				<td><input type="text" name="date_2" value=<?php if(isset($_GET["date_2"])) echo $_GET["date_2"] ?>></td>
			</tr>
			<tr>
				<td align="left"><input type="submit" value="submit"></td>
				<td align="right"><input type="reset" value="reset"></td>
			</tr>
		</table>
		<br>
		<?php  
			if(isset($_GET["name_1"]) && isset($_GET["name_2"]) && isset($_GET["date_1"]) && isset($_GET["date_2"])){
				$name_1 = $_GET["name_1"];
				$name_2 = $_GET["name_2"];
				$date_1 = $_GET["date_1"];
				$date_2 = $_GET["date_2"];
				function isRealDate($date) { 
				    if (false === strtotime($date)) { 
				        return false;
				    }
				    return true; 
				}
				if(!isRealDate($date_1) || !isRealDate($date_2)){
					print "Invalid date of birth!";
				}else{
					$dob_1 = date('l, F d, Y', strtotime($date_1));
					$dob_2 = date('l, F d, Y', strtotime($date_2));
					function DateTime($dob_1, $dob_2, $name_1, $name_2){
						print "The birthday of $name_1 is $dob_1<br>";
						print "The birthday of $name_2 is $dob_2<br>";
						$date1 = new DateTime($dob_1);
						$date2 = new DateTime($dob_2);
						$diffence = $date1->diff($date2);
						$diff = $diffence->days;
						print "Different of 2 persons is $diff days<br>";
						$current_date = date('l, F d, Y', time());
						$date3 = new DateTime($current_date);
						$age_1 = $date1->diff($date3);
						$age_2 = $date1->diff($date3);
						print "$name_1 is $age_1->y years old!<br>";
						print "$name_2 is $age_2->y years old!<br>";
					}
					DateTime($dob_1, $dob_2, $name_1, $name_2);
				}
			}
		?>
	</form>
</body>
</html>