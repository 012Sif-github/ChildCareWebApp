<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/phppot-style.css" type="text/css"rel="stylesheet" />
    <link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
    <title>Curriculum</title>
</head>
<body>

   <div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
		</div>
		<div class="page-content">Guardian recognised as , <?php echo $username;?></div>
	</div>
        
        <form name="infant" action="" method="post">
            <h3><br>> Infant Schedule</h3>
            <p> " Infants are typically categorized as newborns to one year old. <br> 
            A little more flexibility is needed within infant daycare scheduling,<br> 
            as it will largely be based around their biological <br> schedule of when they need to eat and sleep. " <br><br></p>
			<img src="./assets/img/infant.png">		
		</form>

        <form name="toddler" action="" method="post">
            <h3><br>> Toddler Schedule</h3>
            <p>" Toddlers typically range from ages one to three years old.<br>
            As toddlers may be new to daycare environments, <br>
            it is a good idea to encourage parents to incorporate some <br>
            of this routine into their kid’s daily lives at home as well. <br>
            This will establish normalcy and make sure their kids <br>
            do not feel overwhelmed by the change in routine. "<br><br></p>
			<img src="./assets/img/toddler.png">		
		</form>

        <form name="preschooler" action="" method="post">
            <h3><br>> Preschooler Schedule<br></h3>
            <p>" Preschool aged children typically range from three to five years old. <br>
            As you get to know your preschoolers’ interests and personalities better, <br>
            it is a good idea to plan some activities or projects that <br>
            encourage and stimulate kid’s individual interests. "<br><br></p>
			<img src="./assets/img/preschooler.png">		
		</form>
    
</body>
</html>