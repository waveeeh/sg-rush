<?php
session_start();

// Prevent access if not logged in
if (!isset($_SESSION['admin'])) {
    header("Location: loginn.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Sanggunian ng Bongabon</title>
  <link rel="icon" type="image/x-icon" href="assets/icon.png" />
      <link rel="icon" type="image/x-icon" href="icon.png" />
</head>
<body>
    <h2>Dashboard</h2>
<p>Welcome, <?= htmlspecialchars($_SESSION['admin']) ?>!</p>

<p>This is a simple test dashboard.</p>

<a href="logout.php">Logout</a>
</body>
</html>

