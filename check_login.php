<?php
session_start();

require_once 'db_connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT id FROM managers WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
$stmt->bind_result($id);
$stmt->fetch();

$_SESSION['manager_id'] = $id;

// Redirect the user to manager.php
header("Location: intermediar.php");
exit;
} else {
echo "Invalid username or password";
}

$stmt->close();
$conn->close();

?>