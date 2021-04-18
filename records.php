<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];

    require_once("lib/DataSource.php");
    $query = " select * from etshepeng ";
    $result = mysqli_query($con = mysqli_connect("localhost","root","","user") 
    ,$query);

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
<html> 
	<head> 
		<title>Records</title> 
        <link href="assets/css/phppot-style.css" type="text/css"rel="stylesheet" />
        <link href="assets/css/user-registration.css" type="text/css" rel="stylesheet"/>
        <script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
        <link href="assets/css/bootstrap.css" type="text/css "rel="stylesheet"/>
	</head> 
	<body class="bg-dark">
    
    <div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
		</div>
		<div class="page-content">Guardian recognised as , <?php echo $username;?></div>
	</div>

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Guardian Name</td>
                                <td> Child Name </td>
                                <td> Email </td>
                                <td> Contacnt Number </td>
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $GuardianName = $row['username'];
                                        $ChildName = $row['child'];
                                        $Email = $row['email'];
                                        $ContactNumber = $row['phone_number'];
                            ?>
                                    <tr>
                                        <td><?php echo $GuardianName ?></td>
                                        <td><?php echo $ChildName ?></td>
                                        <td><?php echo $Email ?></td>
                                        <td><?php echo $ContactNumber ?></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>