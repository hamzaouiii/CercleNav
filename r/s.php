<!DOCTYPE html>
<?php
$server ="localhost";
$user = "root";
$password = "";
$bdd = new mysqli($server, $user, $password,"test");
if ($bdd->connect_error) {
die("Connected Failed: ".$bdd->connect_error);
}
$update = "update users set visits= visits+1 where id = '1' ";
$bdd->query($update);

$select = "SELECT visits FROM `users`";
$result = $bdd->query($select);
$row = $result->fetch_assoc();
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style type="text/css">
p
{
font-family: "Raleway";
font-size: 35px;
margin-top: 100px;
text-align: center;
}
</style>
</head>
<body>
<p>This pages was viewed <?php echo $row['visits'] ?> times </p>

<?php

/**
* this class is just a test
*/
class Palindrome
{
	
	function isThisPalindrome($word)
	{
			$lcword = strtolower("$word");
	return strrev($lcword)===$lcword;
}
}
	echo Palindrome::isThisPalindrome("dudud");


?>

</body>
</html>