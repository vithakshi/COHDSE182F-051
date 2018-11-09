
<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<h4 align="center"> login first </h4>
<form name="login" method="post" action="#">
name : <input type="text" name ="username">
<br>
password : <input type="text" name="pass">
<br>
<br>
<input type="submit" value="login" name="btn">
</form>


<?php 
session_start();
if(isset($_SESSION["username"])){
	if((time()-$_SESSION['last_time'])>10){
		header("location:welcome.php");
	}
	else
	{
		$_SESSION['last_time']=time();
	}
}
else{
	header('location:home.html');
}
?>

</body>
</html>