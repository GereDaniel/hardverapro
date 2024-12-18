<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardverapró - Regisztráció</title>
    <script src="../js/registration.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.rios.hu/design/ha/logo-favicon.png" type="image/png" rel="shortcut icon">
    <link rel="apple-touch-icon" sizes="200x200" href="https://cdn.rios.hu/design/ha/logo-favicon.png">
</head>
<?php include_once "./navbar.php"?> 
<body>
    <section class="bg-gray-300 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Regisztráció
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="../includes/signup.inc.php" method="POST">
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Felhasználónév</label>
                            <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Felhasználónév" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Cím</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="hpeter@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jelszó</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                    
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="terms" class="font-light text-gray-500 dark:text-gray-300">Elfogadom a </label>
                              <div class="font-medium text-primary-600 hover:underline dark:text-primary-500"><a href="Kodiant_Hardverapro_ASZF.pdf" target="_blank" rel="noopener noreferrer">Felhasználási Feltételeket</a></div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="w-full text-white bg-slate-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Felhasználó létrehozása</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Van már fiókod? <a href="../pages/login.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Jelentkezz be itt</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
      </section>
</body>
</html>