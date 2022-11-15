<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factor Converter</title>
</head>
<body>
	<font size="5" color="blue">Factor Converter</font>
	<form action=""<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
		<table>
			<tr>
				<td>Choose :</td>
				<td><input type="radio" name="grade" value="1">Radians to Degrees</td>
				<td><input type="radio" name="grade" value="2">Degrees to Radians</td>
			</tr>
			<tr>
				<td>Enter :</td>
				<td><input type="number" name="val" step="any" value=<?php if(isset($_GET["val"])){echo $_GET["val"];}?> ></td>
				<td>
					<?php 
						if(isset($_GET["grade"]) && isset($_GET["val"])){
							$result;
							$grade = $_GET["grade"];
							$val = $_GET["val"];
							if($grade == 1){
								$result = $val * 180;
								print "  = $result deg";
							}elseif($grade == 2){
								$result = $val / 180;
								print "  = $result rad";
							}
						}else{
							print "Please choose converter and enter the number";
						}
					?>
				</td>
			</tr>
			<tr>
				<td align="right"><input type="submit" value="submit"></td>
				<td align="left"><input type="reset" value="reset"></td>
			</tr>
		</table>
	</form>
</body>
</html>