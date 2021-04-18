<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['child']) && isset($_POST['birth_date']) && isset($_POST['email'])&& isset($_POST['phone_number'])&& isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("etshepeng", $_POST['username'], $_POST['child'], $_POST['birth_date'], $_POST['email'], $_POST['phone_number'], $_POST['password'])) {
            echo "Sign Up Successful";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
