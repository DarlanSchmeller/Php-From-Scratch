<?php
    // Deleting a cookie is similar to creating, we set an empty value and define an already expired time
    setcookie('username', '', time() - 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>

  <p>
    Your cookie has been deleted. <a href="page.php">Go to page.php</a>
  </p>

</body>

</html>