<html>
<head>
	<style>
		body{
    margin: 0;
    padding: 0;
    background: #4cd137;
}
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 300px;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #191919;
    text-align: center;
}
.box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;




}
.box input[type = "text"]:focus,.box input[type = "password"]{
    width: 200px;
    border-color: #2ecc71;
}
.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;


}
.box input[type = "submit"]:hover{
    background: #2ecc71;
}
	</style>
<title>PhpForm</title>
</head>

<body>

    <?php

    session_start();

     $password = $_SESSION["password"];
    
     if($password==false){
 
    }
   else
    {
    header("location:login.php");
    } 

    ?>
    
	
	

<form class="box" action="login.php" method="post">
                <h1>Login</h1>
                <input type="text" name="email" placeholder="email">
                <input type="password" name="password" placeholder="password">
                <input type="submit" name ="submit" value="submit">
            </form>




</body>
</html>