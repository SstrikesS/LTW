<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Date Time Processing</title>
</head>
<body>
	<font size="3">Enter your name and select date and time for the appointment</font>
	<br>
	<br>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
		<?php 
			if(array_key_exists("name", $_GET)){
				$max_day = 30;
				$name = $_GET["name"];
				$day = $_GET["day"];
				$month = $_GET["month"];
				$year = $_GET["year"];
				$hour = $_GET["hour"];
				$minute = $_GET["minute"];
				$second = $_GET["second"];
				switch ($month) {
					case 2:
						if((($year % 100) != 0 && ($year % 4) == 0) || ($year % 400) == 0){
							$max_day = 29;
							if($day > $max_day)
								$day = $max_day;
						}else{
							$max_day = 28;
							if($day > $max_day)
								$day = $max_day;
						}
						break;
					case 1:
					case 3:
					case 5:
					case 7:
					case 8:
					case 10:
					case 12:
						$max_day = 31;
						if($day > $max_day)
							$day = $max_day;
						break;
					default:
						if($day > $max_day)
							$day = $max_day;
						break;
				}
			}else{
				$day = 1;
				$end = 1;
				$year = 2001;
				$hour = 0;
				$minute = 0;
				$second = 0;
			}
		?>
		<table>
			<tr>
				<td>Your name: </td>
				<td><input type="text" name="name" maxlength="15" size="16" value = "<?php if(isset($_GET["name"])){echo $_GET["name"];}?>"></td>
			</tr>
			<tr>
				<td>Date :</td>
				<td>
					<select name = "day">
						<?php
							for($i = 1; $i <= 31; $i++){
								if($day == $i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select>
					<select name = "month">
						<?php
							for($i = 1; $i <= 12; $i++){
								if($month == $i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select>
					<select name = "year">
						<?php
							for($i = 1900; $i <= 3000; $i++){
								if($year == $i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Time :</td>
				<td>
					<select name = "hour">
						<?php
							for($i = 0; $i <= 23; $i++){
								if($hour == $i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select>
					<select name = "minute">
						<?php
							for($i = 0; $i <= 59; $i++){
								if($minute == $i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select>
					<select name = "second">
						<?php
							for($i = 0; $i <= 59; $i++){
								if($second == $i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right"><input type="Submit" value="Submit"></td>
				<td align="left"><input type="Reset" value="Reset"></td>
			</tr>
		</table>
		<table>
			<?php
				if(array_key_exists("name", $_GET)){
					printf("Hi %s!", $name);
					print("<br></br>");
					printf("You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year");
					print("<br></br>");
					print("More information");
					print("<br></br>");
					print("In 12 hours, the time and date is ");
					$status = "AM";
					if($hour > 12){
						$status = "PM";
						$hour_12 = $hour - 12;
					}
					print("$hour_12:$minute:$second $status, $day/$month/$year");
					print("<br></br>");
					print("This month has $max_day days!");
				}
			?>
		</table>
	</form>
</body>
</html>