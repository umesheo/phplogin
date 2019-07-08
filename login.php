<?php session_start();  

$email = $_POST['email'];
$password = $_POST['password'];




// Set session variables
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;



$_SESSION["id"] = "10";

echo "Session variables are set.";

if(isset($_SESSION['email'])){
	echo "<script>location.href='welcome.php'</script>";
}
else{

echo "<script>location.href='index.php'</script>";
}








?>