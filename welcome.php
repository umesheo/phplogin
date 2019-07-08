<?php
session_start();

 echo "Favorite email is " . $_SESSION["email"] . ".<br>";
echo "Favorite pass is " . $_SESSION["password"] . ".";
echo "<br>";
echo "Your Id is: " . $_SESSION["id"] . ".";


?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
	<br>
	<a href="logout.php"> Logout</a>

</body>
</html>