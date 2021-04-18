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
<HTML>
<HEAD>
<TITLE>Etshepeng Day Care</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
		</div>
		<div class="page-content">Welcome , <?php echo $username;?></div>
	</div>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="agreement.php" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Agreement Forms</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="view">
					</div>
                    
				</form>
                
			</div>
		</div>
	</div>

    <div class="phppot-container">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="inbox.php" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Messages</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="view">
					</div>
                    
				</form>
                
			</div>
		</div>
	</div>

    <div class="phppot-container">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="curriculum.php" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Academic Schedule</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="view">
					</div>
				</form>
                
			</div>
		</div>
	</div>

	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="schedule.php" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Daily Schedule</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="view">
					</div>
				</form>
                
			</div>
		</div>
	</div>

    <div class="phppot-container">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="records.php" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Contact List</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="view">
					</div>
                    
				</form>
                
			</div>
		</div>
	</div>
</BODY>
</HTML>
