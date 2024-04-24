<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Child</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 40px;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        form {
            display: inline-block;
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input {
            width: 100%;
            padding: 5px;
            margin-bottom: 20px;
        }

        form button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        form button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<?php
require 'db_connect.php';

$sql = "SELECT * FROM events";
$result = $conn->query($sql);
?>
  <h1>Evenimente propuse de magazinul Crafti</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titlu</th>
                <th>Descriere</th>
                <th>Locație</th>
                <th>Dată</th>
                <th>Oră</th>
                <th>Locuri disponibile</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['description'] ?></td>
                    <td><?= $row['location'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td><?= $row['time'] ?></td>
                    <td><?= $row['available_seats'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <form action="register_child_process.php" method="post">
        <h1>Register Child</h1>
        <label for="event_id">Event ID:</label>
        <input type="number" name="event_id" id="event_id" required>
        <label for="child_name">Child Name:</label>
        <input type="text" name="child_name" id="child_name" required>
        <button type="submit">Register Child</button>
    </form>
</body>
</html>
<?php 
$conn->close();
?>