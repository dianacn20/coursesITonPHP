<?php
session_start();
if (!isset($_SESSION['manager_id'])) {
    header('Location: login.php');
    exit;
}
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $available_seats = $_POST['available_seats'];
    $description = $_POST['description'];

    $sql = "INSERT INTO events (title, date, time, location, available_seats, description) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssis", $title, $date, $time, $location, $available_seats, $description);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    header('Location: intermediar.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Event</title>
    <link rel="stylesheet" href="css/add_evenim.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   
</head>

<body>
    <h1>Add New Course</h1>
    <form action="add_evenim.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>
        <br>
        <label for="time">Time:</label>
        <input type="time" name="time" id="time" required>
        <br>
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" required>
        <br>
        <label for="available_seats">Available Seats:</label>
        <input type="number" name="available_seats" id="available_seats" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
        <br>
        <button type="submit" class="col-md-12 text-center">Add Course</button>
    </form>
</body>

</html>