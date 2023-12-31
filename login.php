<?php
session_start();
include("config.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if (verifyPassword($password, $user_data['password'])) {
                $_SESSION['user_id'] = $user_data['user_id'];
                $user_email = $user_data['email'];

                // Send a login notification email
                $loginMessage = "Hello, " . $user_data['user_name'] . "! You have successfully logged in.";
                sendEmailNotification($user_email, "Login Notification", $loginMessage);

                header("Location: index.php");
                die;
            } else {
                echo "Incorrect password. Please try again.";
            }
        } else {
            echo "User not found. Please check your username.";
        }
    } else {
        echo "Please enter valid information.";
    }
}
?>

</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<style type="text/css">
		#text{

		height: 25px;
		border-radius:5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;

	}

	#box{
		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;



	}
	</style>

	<div id="box">
		<form method="post">
			<div style="font-size: 20px; margin: 10px; color: white;">Login</div>
			
			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" name="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>


</body>
</html>