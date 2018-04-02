<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "urcscon3_shangh";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_shangh";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $name = Trim(stripslashes($_POST['name']));
    $email = Trim(stripslashes($_POST['email']));
    $phone = Trim(stripslashes($_POST['phone']));
    $textarea = Trim(stripslashes($_POST['textarea']));

	
	$query  = "INSERT INTO contact (name, email, phone, textarea) VALUES ('$name','$email','$phone','$textarea')";
	$result = mysqli_query($connection, $query);

?>

<!DOCTYPE Html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 4</title>

</head>
<body>

Success !
The Student
<?php echo $name; ?><br><br>
Your email address is: <?php echo $email; ?>
has been added.

</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>