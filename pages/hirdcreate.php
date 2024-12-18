<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Hirdetés Beküldése</title>
</head>
<body>
    <h1>Új Hirdetés Feltöltése</h1>
    <form action="../includes/mentes.php" method="POST" enctype="multipart/form-data">
        <label for="cim">Cím:</label><br>
        <input type="text" name="cim" id="cim" required><br><br>

        <label for="kategoria">Kategória:</label><br>
        <input type="text" name="kategoria" id="kategoria" required><br><br>

        <label for="leiras">Leírás:</label><br>
        <textarea name="leiras" id="leiras" rows="5" cols="30"></textarea><br><br>

        <label for="kep">Kép feltöltése:</label><br>
        <input type="file" name="kep" id="kep" accept="image/*" required><br><br>

        <button type="submit">Hirdetés Feltöltése</button>
    </form>
</body>
</html>
