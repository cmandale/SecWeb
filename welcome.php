<?php

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    .banner {
            background-color: #007bff; /* Blue color */
            color: white;
            padding: 10px;
            text-align: center;
        }
    .button {
            background-color: #4CAF50; /* Green color */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
 }
    <title>placeholder</title>
</head>
<body>
   <div class+"banner">
		<h2>Group 7 Website</h2>
		<a href="logout.php" class="button">Mandale</a>
		<a href="welcome.php" class="button">Dylan</a>
		<a href="button3.php" class="button">Fayzah</a>
		<a href="button4php" class="button">Fayzah</a>
   </div>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    <h2>Upload a File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
