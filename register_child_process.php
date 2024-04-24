<?php
require 'db_connect.php';
// Verificam daca formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Definim variabilele si initializam cu valorile din formular
  $event_id = $_POST['event_id'];
  $child_name = $_POST['child_name'];

  $sql = "SELECT * FROM events WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $event_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $event = $result->fetch_assoc();
  $stmt->close();
  
  // Definim variabila pentru a urmari erorile de validare
  $errors = array();
  
  // Verificam daca id-ul evenimentului exista in baza de date
  if (!$event) {
    $errors[] = "Invalid event ID";
  }
  
  // Validam campul "child_name"
  if (empty($child_name)) {
    $errors[] = "Child Name is required";
  } elseif (!preg_match("/^[a-zA-Z ]*$/", $child_name)) {
    $errors[] = "Child Name can only contain letters and spaces";
  }
  
  // Afisam mesajul de eroare daca exista probleme cu validarea
  if (!empty($errors)) {
    echo "<h3>Errors:</h3>";
    foreach ($errors as $error) {
      echo "<p>$error</p>";
    }
  } else {
    // Salvam datele copilului in baza de date sau intr-un fisier, in functie de necesitatile aplicatiei
    if ($event['available_seats'] > 0) {
        $sql = "INSERT INTO children (name, event_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $child_name, $event_id);
        $stmt->execute();
        $stmt->close();
    
        $sql = "UPDATE events SET available_seats = available_seats - 1 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $event_id);
        $stmt->execute();
        $stmt->close();

    } else {
        echo "No available seats. Registration failed.";
    }
    echo "<h3>Child data saved successfully!</h3>";
  }
}

$conn->close();

// Redirect back to the event details page
header("Refresh: 3; URL=index.php?id=" . $event_id);
?>
