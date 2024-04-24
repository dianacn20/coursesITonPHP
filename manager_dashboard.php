<?php
session_start();

if (!isset($_SESSION['manager_id'])) {
    header('Location: login.php');
    exit;
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Dashboard</title>
</head>
<body>
    <h1>Welcome, Manager!</h1>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
