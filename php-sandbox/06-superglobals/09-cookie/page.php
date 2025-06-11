<?php
    $username = $_COOKIE['username'] ?? 'Guest';    // Get username in Cookie or default to Guest
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>
  <h1>Welcome <?= $username ?></h1>
  <a href="destroy.php">Delete cookie</a>
</body>

</html>