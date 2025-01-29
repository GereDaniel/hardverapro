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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirdetés Részletei</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
        <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">Hirdetés Részletei</h1>
        <p class="text-lg"><strong>Kategória:</strong> <?= htmlspecialchars($hirdetes['kategoria']) ?></p>
        <p class="mt-2"><strong>Leírás:</strong> <?= nl2br(htmlspecialchars($hirdetes['leiras'])) ?></p>
        <?php if (file_exists($hirdetes['kep_url'])): ?>
            <img src="<?= htmlspecialchars($hirdetes['kep_url']) ?>" alt="<?= htmlspecialchars($hirdetes['cim']) ?>" class="mt-4 max-w-full rounded-lg">
        <?php endif; ?>
        <p class="mt-2 text-gray-700"><strong>Hirdető e-mail címe:</strong> <?= htmlspecialchars($hirdetes['email']) ?></p>
        
        <h2 class="text-xl font-semibold text-gray-800 mt-6">Üzenet Küldése</h2>
        <form action="../includes/uzenet_kuldes.php" method="POST" class="space-y-4 mt-4">
            <input type="hidden" name="id" value="<?= $hirdetes['id'] ?>">
            
            <div>
                <label for="nev" class="block text-gray-700 font-medium">Neved:</label>
                <input type="text" name="nev" id="nev" required 
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label for="uzenet" class="block text-gray-700 font-medium">Üzenet:</label>
                <textarea name="uzenet" id="uzenet" rows="5" required 
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Üzenet Küldése</button>
        </form>
    </div>
</body>
</html>
