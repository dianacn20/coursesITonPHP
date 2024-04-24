<head>
    <link rel="stylesheet" href="css/lista_copii.css">
</head>
<?php
require 'db_connect.php';

// Check if form data is submitted
    // Retrieve submitted form data
    // $child_name = trim($_POST["child_name"]);

    // SQL query to retrieve child name and associated event name
    $sql = "SELECT children.name, events.title 
            FROM children
            INNER JOIN events ON children.event_id = events.id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Create a table to display query results
        echo "<table>
                <thead>
                    <tr>
                        <th>Nume copil</th>
                        <th>Nume eveniment</th>
                    </tr>
                </thead>
                <tbody>";

        // Append data of each row to the table
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["title"] . "</td>
                  </tr>";
        }

        // Close the table
        echo "</body></table>";

        // Create a "Go back" button
        echo '<form method="get" action="intermediar.php">
<input type="submit" value="Înapoi la pagina principală">
</form>';
    } else {
        echo "Nu s-au găsit înregistrări.";
    }

$conn->close();
