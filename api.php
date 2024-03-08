<?php
	
	if(isset($_POST["submit"])){
	if(empty($_POST["city"])){
        echo " Enter your City";
	}else{
	$city=$_POST["city"];
	$api_key = "96f5a62f19da2bf0f52c4dcdff1b6d57";
	$api_main = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
	
	
	$api_data =file_get_contents($api_main);
	//print_r($api_data);
	
	if ($api_data === false) {
            // Error handling for failed API request
            echo "Failed to fetch weather data. Please try again later.";
			} else {
			
			
	
	$weather =json_decode($api_data,true);
	//print_r($weather);
	
    echo "Weather Description: " . htmlspecialchars($weather ["weather"][0]["description"]);
	 
	 echo "Temperature: " . htmlspecialchars($weather["main"]["temp"]);
	 
	}
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
	
	
