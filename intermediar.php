<?php
session_start();

if (!isset($_SESSION['manager_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Dashboard</title>
    <link rel="stylesheet" href="css/interm.css">
</head>
<body>
    <h1>Salutare, Admin!</h1>
    <a href="lista_copii.php">Vizualizați lista copiilor înregistrați</a>
    <a href="lista_evenim.php">Vizualizați lista evenimentelor</a>
    <a href="add_evenim.php">Adăugați un eveniment nou</a>

    <p><a href="index.php" class="logout">Logout</a></p>
</body>
</html>

