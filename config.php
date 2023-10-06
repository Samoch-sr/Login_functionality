<?php
// Database configuration
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

// Email configuration
$adminEmail = "admin@example.com"; // Replace with your admin email
$smtpHost = "smtp.example.com"; // Replace with your SMTP host
$smtpPort = 587; // Replace with your SMTP port
$smtpUsername = "your_smtp_username"; // Replace with your SMTP username
$smtpPassword = "your_smtp_password"; // Replace with your SMTP password

// Establish a database connection
if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("Failed to connect to the database");
}
?>