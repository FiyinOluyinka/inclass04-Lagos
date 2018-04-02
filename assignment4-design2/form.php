<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Assignment 4</title>
	<style>
	/* Just some appearance adjustments... */
	h1, h2 { margin: 0.5em 0 0.25em; }
	h1 { font-size: 1.5em; }
	h2 { 
		font-size: 1em;
		font-weight: normal;
	}
	fieldset { 
		margin-bottom: 10px; 
		width: 326px;
	}
	textarea { 
		display: block; 
		width: 350px;
		height: 7rem;
	}

	/* The square brackets is a way to target just
		the SUBMIT button with styles */
	input[type="submit"] { margin-top: 10px; }

	/* Secret sauce (below) - apply the class="box"
		to any container and the elements inside will 
		line-up nicely, side-by-side.
		
		USAGE: wrap all the label/input pairs you 
		create in their own DIV and apply the 
		class="box" to the DIV.
	*/
	.box { display: table-row; }
	.box > * { 
		display: table-cell; 
		padding-right: 10px; 
		margin-bottom: 10px;
	}

	</style>
</head>

<?php include 'inc/html-top.inc' ;?> 

<body>

<?php include 'inc/nav.inc' ;?>

<h1> Contact Us </h1>
	<form method="post" action="welcome.php">

		<div class="box">
			Name:      
			<input type="text" name="name" id="name" required autofocus>
			<label for="name"></label>
		</div>

		<div class="box">
			Email:     
			<input type="text" name="email" id="email" required>
			<label for="email"></label>
		</div>

		<div class="box">
			Telephone:
			<input type="text" name="phone" id="phone" required>
			<label for="phone"></label>
		</div>	

<fieldset>
	
		
Describe what your major is and your reason for choosing it
		<textarea name="textarea" id="textarea">
		</textarea>
		<input type="submit" value="Send">

</form>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Designed by Fiyinfoluwa Oluyinka </p> 
</footer>


</body>
</html>