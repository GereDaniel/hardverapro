<?php

require_once "config.php"; // Adatbázis kapcsolat

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cim = $_POST['cim'];
    $kategoria = $_POST['kategoria'];
    $leiras = $_POST['leiras'];

    // Kép feltöltése
    $target_dir = "../feltoltott_kepek/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($_FILES['kep']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Csak képfájlok engedélyezése
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowed_types)) {
        die("Hiba: Csak JPG, JPEG, PNG és GIF fájlok engedélyezettek.");
    }

    if (move_uploaded_file($_FILES['kep']['tmp_name'], $target_file)) {
        // Adatok mentése az adatbázisba
        $stmt = $conn->prepare("INSERT INTO hirdetesek (cim, kategoria, leiras, kep_url) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $cim, $kategoria, $leiras, $target_file);

        if ($stmt->execute()) {
            header("Location: ../pages/hirdetes.php?success=1");
            exit();
        } else {
            echo "Hiba az adatbázisba mentés során: " . $stmt->error;
        }
    } else {
        echo "Hiba történt a kép feltöltésekor.";
    }
} else {
    echo "Érvénytelen kérés.";
}
?>
