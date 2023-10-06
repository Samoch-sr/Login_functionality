<?php
session_start();
include("config.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Hash the password securely before saving it to the database
        $hashed_password = hashPassword($password);

        // Generate a random user ID
        $user_id = random_num(20);

        $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$hashed_password')";
        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "Please enter valid information.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Signup</title>
</head>
<body>
  <style type="text/css">
    #text{
      height: 25px;
      border-radius: 5px;
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
      <div style="font-size: 20px; margin: 10px; color: white;">Signup</div>
      <input id="text" type="text" name="user_name"><br><br>
      <input id="text" type="password" name="password"><br><br>
      <input id="button" type="submit" name="Signup"><br><br>
      <a href="login.php">Click to Login</a><br><br>
    </form>
  </div>
</body>
</html>
