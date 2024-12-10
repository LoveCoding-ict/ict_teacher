<?php
// Define hardcoded credentials for simplicity
$validUsername = "teacher";
$validPassword = "ict123";

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check credentials
if ($username === $validUsername && $password === $validPassword) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Dashboard</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                padding: 50px;
                background-color: #f4f4f4;
            }
            h1 {
                color: #4CAF50;
            }
        </style>
    </head>
    <body>
        <h1>Welcome, $username!</h1>
        <p>Login successful.</p>
        <a href='index.html' style='text-decoration: none; color: #fff; background-color: #4CAF50; padding: 10px 20px; border-radius: 5px;'>Go Back</a>
    </body>
    </html>";
} else {
    echo "<script>
    alert('Invalid username or password. Please try again.');
    window.location.href = 'index.html';
    </script>";
}
?>
