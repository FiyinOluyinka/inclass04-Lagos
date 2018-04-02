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

<body>

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
	<legend>Browsers</legend>
		
			
				What is your major?<br>
				
					<input type="checkbox" name="economics" value="economics" id="economcis">economics
					<label for="fire"></label><br>

					<input type="checkbox" name="computerscience" value="computerscience" id="computerscience">computerscience
					<label for="chrome"></label><br>

					<input type="checkbox" name="engineering" value="engineering" id="engineering">engineering
					<label for="saf"></label><br>

					<input type="checkbox" name="other" value="other" id="other">other
					<label for="int"></label><br>
		

</fieldset>

		Describe why you choose this major
		<textarea name="textarea" id="textarea">
		</textarea>
		<input type="submit" value="Send">

</form>

</body>
</html>