<!DOCTYPE html>
<!-- Workout log page -->

<html lang="en">
<link rel="stylesheet" href="styles_css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/font-awesome.min.css">

<head>
	<meta charset="UTF-8">
	<title>Fitness App</title>

	<div id="navbar">
		<a class="btn" href="index.html">Home</a>
		<a class="btn" href="workoutDemo.html">Demos</a>
		<a class="btn active" href="log-workout.html"><i class="fa-solid fa-dumbbell"></i>Workout</a>
		<a class="btn" href="log-calories.html">Calories</a>
		<a class="btn" href="about.html">About</a>
		<a class="btn" href="signup.html">Sign-Up</a>
		<a class="btn" href="login.html">Log-In</a>
	</div>
	<script type="navbar">
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("navbar");

		var sticky = navbar.offsetTop;

		function myFunction() {
			if (window.pageYOffset >= sticky) {
				navbar.classList.add("sticky")
			} else {
				navbar.classList.remove("sticky");
			}
		}
	</script>
	<script type="activebutton">
		var btnContainer = document.getElementById("navbar");

		var btns = btnContainer.getElementsByClassName("btn");

		for (var i = 0; i < btns.length; i++) {
			btns[i].addEventListener("click", function() {
				var current = document.getElementsByClassName("active", "");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			});
		}
	</script>
</head>

<body>

<p>
	Bench Press:
	<form action="log-workout.php" method="post">
		Sets: <input type="text" name="bench-sets"> Reps: <input type="text" name="reps"> Weight: <input type="text" name="weight">
	</form>

	Number of sets = <?php echo $_POST["bench-sets"]; ?>
</p>

<p>
	SA DB Row:
	<form>
		<form action="log-workout.php" method="post">
		Sets: <input type="text" name="dbrow-sets"> Reps: <input type="text" name="reps"> Weight: <input type="text" name="weight">
		<input type="submit">
	</form>

	Number of sets = <?php echo $_POST["dbrow-sets"]; ?>
</p>
<!--
<p>
	Test
</p>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</body>
-->
