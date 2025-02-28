
<header class=" fixed top-0 w-full z-10">
     <nav class="relative px-4 py-4 flex justify-between items-center bg-white" style="z-index: 9999;">
      <a class="text-3xl font-bold leading-none" href="index.html">
      <img src="https://cdn.rios.hu/design/ha/logo-favicon.png" alt="" class="h-10">
      </a>
      <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-blue-600 p-3">
          <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Hardverapró</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
        </button>
      </div>
      <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="text-sm text-blue-600 font-bold" href="<?php 
        if(file_exists("index.php")) {
          echo "index.php";
        }
      else {
        echo"../index.php"; 
      }
        ?>">Főoldal</a></li>
        <li class="text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
          </svg>
        </li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="https://prohardver.hu/index.html" target="_blank">PROHARDVER</a></li>
        <li class="text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
          </svg>
        </li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="https://mobilarena.hu/index.html" target="_blank">Mobilaréna</a></li>
        <li class="text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
          </svg>
        </li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="https://itcafe.hu/index.html" target="_blank">IT café</a></li>
        <li class="text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
          </svg>
        </li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="https://gamepod.hu/index.html" target="_blank">GAMEPOD.hu</a></li>
        <li class="text-gray-300"></li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
          </svg>
        </li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="https://logout.hu/index.html" target="_blank">LOGOUT.hu</a></li>
        <?php
      //Ez kapcsolja ki az errorok es warningok megjeleniteset
        error_reporting(0);
        if(($_SESSION['loggedin']) == true) { ;?>
          <li class="relative">
            <img src="<?php echo $_SESSION['loggedin']['profile_picture']; ?>" alt="Profile Picture" class="w-8 h-8 rounded-full cursor-pointer" onclick="toggleDropdown()">
            <ul id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
              <li><a href="<?php 
        if(file_exists("profile.php")) {
          echo "profile.php";
        }
      else {
        echo"pages/profile.php"; 
      }
        ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Jelszó változtatás</a></li>
        <li><a href="<?php
        if(file_exists("hirdcreate.php")) {
          echo"hirdcreate.php";
        }
        else {
          echo"pages/hirdcreate.php";
        }
        ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Hirdetés feltöltése</a></li>
              <li><a href="<?php 
        if(file_exists("logout.php")) {
          echo "logout.php";
        }
      else {
        echo"pages/logout.php"; 
      }
        ?>" class="block px-4 py-2 text-gray-800 hover:bg-red-600">Kijelentkezés</a></li>
            </ul>
          </li>
            <?php } else {?>
      </ul>
      <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="<?php 
        if(file_exists("registration.php")) {
          echo "registration.php";
        }
      else {
        echo"pages/registration.php"; 
      }
        ?>">Regisztráció</a>
      <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="<?php 
        if(file_exists("registration.php")) {
          echo "login.php";
        }
      else {
        echo"pages/login.php"; 
      }
        ?>">Bejelentkezés</a>
      <?php } ?>
    </nav>
  
    <script>
      function toggleDropdown() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('hidden');
      }
    </script>
  </header>
