	<?php

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
	
	if(isset($_POST["submit"])){
	if(empty($_POST["city"])){
        echo " Enter your City";
	}else{
	$city=$_POST["city"];
	$api_key = "96f5a62f19da2bf0f52c4dcdff1b6d57";
	$api_main = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
	
	
	$api_data =file_get_contents($api_main);
	//print_r($api_data);
	
	$weather =json_decode($api_data,true);
	//print_r($weather);
	
    echo $weather ["weather"][0]["description"];
	
	 echo $weather["main"]["temp"];
	}
}
	
	?>
	
	<!DOCTYPE html>
	<html lang ="en">
	<head>
	
	  <meta charset="UTF-8">
	  
	  <title>See weather</title>
	</head>
	
	<body>
	
	 <section>
	 <form method="post">
	 <h1> Check weather </h1>
	       <input type = "text" name="city" id ="">
		   <input name ="submit"  type ="submit" value= "check weather">
	 </form>
	 </section>
	
	</body>
	
	</html>
	
	
