<?php 
require_once "../includes/config.php";

@session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('location: login.php');
    exit;
} ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirdetés Beküldése</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Új Hirdetés Feltöltése</h1>
        <form action="../includes/mentes.php" method="POST" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label for="cim" class="block text-gray-700 font-medium">Cím:</label>
                <input type="text" name="cim" id="cim" required 
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label for="kategoria" class="block text-gray-700 font-medium">Kategória:</label>
                <input type="text" name="kategoria" id="kategoria" required 
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label for="leiras" class="block text-gray-700 font-medium">Leírás:</label>
                <textarea name="leiras" id="leiras" rows="5" 
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            
            <div>
                <label for="kep" class="block text-gray-700 font-medium">Kép feltöltése:</label>
                <input type="file" name="kep" id="kep" accept="image/*" required 
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg cursor-pointer bg-white">
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Hirdetés Feltöltése</button>
        </form>
    </div>
</body>
</html>