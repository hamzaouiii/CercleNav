<!DOCTYPE html>
<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$database = "test";  
	$bdd =  new mysqli($host,$user, "",$database) ;
	
	if ($bdd->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
	}

	$res= mysqli_query($bdd, "select name from cats where id = 1");
	$row= mysqli_fetch_assoc($res);
	$result = $row['name'];
?>
<html>
<head>
	<title>Simple Hit counter</title>
	
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	</style>
</head>
<body>

<?php
$views = file_get_contents("views.txt");
$views++;
file_put_contents("views.txt",$views);
echo "<p>Hello! You are the ".$views."th visitor of this page.</p><p>Please Sign up to $result </p>";
?>
<form action="index.php" method="POST">
	<label for ="user">Username</label>
	<input name="username" type="text"><br><br>

	<label>Name</label> <br>
	<input name="name" type="text"><br><br>

	<label>Surename</label><br>
	<input type="text"><br><br>

	<label>Password</label><br>
	<input type="password"><br><br>

	<label>Email</label><br> 
	<input type="email"><br><br>

	<label>date of birth</label><br>
	<input type="date"><br><br>

	<a href="#">Submit</a>
</form>
</body>
</html>