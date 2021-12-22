<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Number Form</title>
</head>
<body>
	<h2>Number Form</h2>
	<h3>Enter a number and we will square it for you!</h3>
	<?php
		$DisplayForm = TRUE;
		$Number = "";

		$DisplayForm = TRUE;
		$Number = "";

		if(isset($_POST["Submit"])){
			$Number = $_POST["Number"];
			if(is_numeric($Number)){
				$DisplayForm = FALSE;

			}

			else{
				echo "<p style='color: red;'>You need to enter a numeric value!</p>";
				$DisplayFrom = TRUE;

			}

		} // end of the first if statement

		if($DisplayForm){
			?>
			<form name="NumberForm" action="NumberForm.php" method="post">
				<label>Enter a number:</label> <input type="text" name="Number" value="<?php echo $Number; ?>"/>
				<p>
					<input type = "reset" value ="Clear Form" />&nbsp;&nbsp; <input type = "Submit" name = "Submit"
					value = "Send Form" />
				</p>
			</form>
			<?php
		}

		else{
			echo "<p>Thank you for entering a number!/p>";
			echo "<p> Your number, {$Number} squared is: ", ($Number * $Number), ".</p>";
			echo "<p><a href=\"NumberForm.php\"> Try Again?</a></p>";

		}
	




	?>


</body>
</html>