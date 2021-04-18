
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
        <img src="./assets/img/1.png">
        <img src="./assets/img/2.png">
        <img src="./assets/img/3.png">
        <img src="./assets/img/4.png">
        <img src="./assets/img/5.png">
        <img src="./assets/img/6.png">
        <img src="./assets/img/7.png">
        <img src="./assets/img/8.png">
        <img src="./assets/img/9.png">
        <img src="./assets/img/10.png">
        <img src="./assets/img/11.png">
    
</body>
</html>

