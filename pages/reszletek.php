<?php

require_once "../includes/config.php";

// Ellenőrizzük, hogy POST kérés érkezett-e
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Érvénytelen kérés.";
    exit();
}

// Ellenőrizzük, hogy az 'id' mező létezik-e és érvényes-e
if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    echo "Hiba: Érvénytelen vagy hiányzó azonosító.";
    exit();
}

$id = intval($_POST['id']); // Az azonosító biztonságos konvertálása
$stmt = $conn->prepare("SELECT * FROM hirdetesek WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Nincs ilyen hirdetés.";
    exit();
}

$hirdetes = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Hirdetés Részletei</title>
</head>
<body>
    <h1><?= htmlspecialchars($hirdetes['cim']) ?></h1>
    <p><strong>Kategória:</strong> <?= htmlspecialchars($hirdetes['kategoria']) ?></p>
    <p><strong>Leírás:</strong> <?= nl2br(htmlspecialchars($hirdetes['leiras'])) ?></p>
    <?php if (file_exists($hirdetes['kep_url'])): ?>
        <img src="<?= htmlspecialchars($hirdetes['kep_url']) ?>" alt="<?= htmlspecialchars($hirdetes['cim']) ?>" style="max-width: 500px;">
    <?php endif; ?>
    <p><strong>Hirdető e-mail címe:</strong> <?= htmlspecialchars($hirdetes['email']) ?></p>

    <h2>Üzenet Küldése</h2>
    <form action="../includes/uzenet_kuldes.php" method="POST">
        <input type="hidden" name="id" value="<?= $hirdetes['id'] ?>">
        <label for="nev">Neved:</label><br>
        <input type="text" name="nev" id="nev" required><br><br>

        <label for="uzenet">Üzenet:</label><br>
        <textarea name="uzenet" id="uzenet" rows="5" cols="30" required></textarea><br><br>

        <button type="submit">Üzenet Küldése</button>
    </form>
</body>
</html>
