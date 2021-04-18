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
    <link href="assets/css/style.css" type="text/css"rel="stylesheet" />
    <title>Agreement</title>
</head>
<body>
    <div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
		</div>
		<div class="page-content">Guardian recognised as, <?php echo $username;?></div>

        <p><br><br>Below is our Daycare-Childcare-Agreement , please sign and submit in-person .<p>
	</div>
    <img src="./assets/img/daycare-childcare-agreement.png">

    

</body>
</html>