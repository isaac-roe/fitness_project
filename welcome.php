<!DOCTYPE html>
<!-- Workout log page -->

<html lang="en">
<link rel="stylesheet" href="styles_css">

<head>
	<meta charset="UTF-8">

</head>

<body>
	<p>
		Number of sets = <?php echo $_POST["sets"]; ?>
	</p>

	<p>
	Bench Press:
	</p>
	<form action="welcome.php" method="post">
		Sets: <input type="text" name="sets"> Reps: <input type="text" name="reps"> Weight: <input type="text" name="weight">
		<input type="submit">
	</form>

	Number of sets = <?php echo $_POST["sets"]; ?>
</body>