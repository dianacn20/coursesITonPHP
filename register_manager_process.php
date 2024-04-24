<?php // Include database connection file
require_once "db_connect.php";

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve submitted form data
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Check if username and password are not empty
    if (!empty($username) && !empty($password)) {
        // Hash the password using md5
        $hashed_password = md5($password);

        // Check if username already exists in the database
        $stmt = $conn->prepare("SELECT id FROM managers WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // If username already exists, display a warning message
            echo "Numele de utilizator există deja în baza de date. Vă rugăm să alegeți alt nume de utilizator.";
        } else {
            // If username does not exist, insert the new user data into the database
            $stmt = $conn->prepare("INSERT INTO managers (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);
            
            if ($stmt->execute()) {
                // Display a success message and redirect to the login page
                echo "Utilizatorul a fost înregistrat cu succes.";
                header("Location: login.php");
            } else {
                // Display an error message if the insert query failed
                echo "Eroare la înregistrarea utilizatorului: " . $stmt->error;
            }
        }
    }
}

// Close the database connection
$conn->close();
?>
