<?php
require_once 'db_connect.php';

$sql = "SELECT * FROM events";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cursuri ItAcademy</title>
    <link rel="stylesheet" href="css/lista_even.css">
</head>
<body>
    <h1>Toate cursurile disponimile in ItAcademy</h1>
    <table>
        <thead>
            <tr>
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
    <a href="index.php">Înapoi la pagina principală</a>
</body>
</html>

<?php $conn->close(); ?>
