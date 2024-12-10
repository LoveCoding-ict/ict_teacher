<?php
// Hardcoded credentials for demonstration purposes
$validUsername = "teacher";
$validPassword = "ict123";

// Retrieve submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials
if ($username === $validUsername && $password === $validPassword) {
    // If login is successful, display content
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>ICT Library (Teacher)</title>
      <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
          margin: 0;
          padding: 0;
        }

        .bg {
          margin: 20px auto;
          max-width: 900px;
          background-color: MediumSeaGreen;
          border-radius: 10px;
          text-align: center;
          font-size: 20px;
          padding: 20px;
        }

        a {
          background-color: #f44336;
          color: white;
          padding: 10px 20px;
          text-decoration: none;
          border-radius: 5px;
          transition: background-color 0.3s ease;
        }

        a:hover {
          background-color: SlateBlue;
        }

        @media (max-width: 768px) {
          .bg {
            font-size: 18px;
          }

          a {
            padding: 8px 16px;
          }
        }

        @media (max-width: 480px) {
          .bg {
            font-size: 16px;
          }

          a {
            padding: 6px 12px;
          }
        }
      </style>
    </head>
    <body>
      <div class='bg'>
        <h2>ICT Library (Teacher)</h2>
        <a href='https://sala.moeys.gov.kh/kh/library/00001483'>សៀវភៅសិក្សាICT</a>
        <br><br>
        <a href='https://play.kahoot.it/v2/lobby?quizId=fbbc7e2d-38e8-45a2-b7b0-57c9e472af7d'>ហ្គេមឆ្លើយសំណួរ</a>
        <br><br>
        <a href='https://wheelofnames.com/'>ស្វែងរកសិស្សឆ្លើយសំណួរ</a>
        <br><br>
        <a href='https://wheelofnames.com/'>បែងចែកក្រុមសិស្ស</a>
      </div>
    </body>
    </html>";
} else {
    // If login fails, show error and link back to login page
    echo "<script>
    alert('Invalid username or password. Please try again.');
    window.location.href = 'index.php';
    </script>";
}
?>
