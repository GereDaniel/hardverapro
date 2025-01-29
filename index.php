

<?php

require_once "includes/config.php";

$result = $conn->query("SELECT * FROM hirdetesek ORDER BY feltoltes_datum DESC");

@session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('location: pages/login.php');
    exit;
}

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    

    <title>Hardverapró</title>

    <link href="https://cdn.rios.hu/design/ha/logo-favicon.png" type="image/png" rel="shortcut icon">
    <link rel="apple-touch-icon" sizes="200x200" href="https://cdn.rios.hu/design/ha/logo-favicon.png">
  </head>
<?php 


include_once "./pages/navbar.php";


?>


  <body>
    
    <div class="grid justify-items-center backgroundimg">
      <div class="flex items-center p-4 space-x-4 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500 " style="
      height: 100px;
      margin-top: 50px;
  ">
        <div class="flex bg-gray-100 p-4 w-96 space-x-4 rounded-lg m-8">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
          <input class="bg-gray-100 outline-none" type="text" placeholder="Keresés">
        </div>
       
        <div class="bg-green-400 py-3 px-5 text-white font-semibold rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg></span>
        </div>
      </div>
    
    </div>
</div>
   <div id="modelConfirm" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
       <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
   
           <div class="flex justify-end p-2">
               <button type="button"
                   class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                   <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd"
                           d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                           clip-rule="evenodd"></path>
                   </svg>
               </button>
           </div>
   
       
       </div>
   </div>

  

     
    </div>
  </div>
</div>



        </div>
      </div>
  
<div class=" bg-slate-800/55  flex space-x-7 justify-center p-3 mt-[-1px]  ">
<div class="text-2xl flex space-x-6 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-slate-500/55 duration-300 rounded " style="flex-direction: row;
flex-wrap: wrap;
align-content: center;
justify-content: center;
align-items: center;"> 
   <button class="text-white w-32  bg-slate-600/30 hover:bg-slate-600/70 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
<img class="m-auto" src="images/icons8-video-card-48.png" alt="" >
<label  class="text-white cursor-pointer">Hardver</label>
</div>
<div class="text-2xl flex space-x-6 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-slate-500/55 duration-300 rounded" style="flex-direction: row;
flex-wrap: wrap;
align-content: center;
justify-content: center;
align-items: center;"> 
</button>
<button class="text-white w-32  bg-slate-600/30 hover:bg-slate-600/70 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
<img class="m-auto" src="images/icons8-laptop-50.png" alt=""   >
   <label  class="text-white cursor-pointer">Notebook</label>
</div>
<div class="text-2xl flex space-x-6 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-slate-500/55 duration-300 rounded" style="flex-direction: row;
flex-wrap: wrap;
align-content: center;
justify-content: center;
align-items: center;"> 
</button>
<button class="text-white w-32  bg-slate-600/30 hover:bg-slate-600/70 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
<img class="m-auto" src="images/icons8-monitor-50.png" alt="">
<label  class="text-white cursor-pointer">PC, szerver</label>
</div>
<div class="text-2xl flex space-x-6 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-slate-500/55 duration-300 rounded" style="flex-direction: row;
flex-wrap: wrap;
align-content: center;
justify-content: center;
align-items: center;"> 
</button>
<button class="text-white w-32 bg-slate-600/30 hover:bg-slate-600/70 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
<img class="m-auto" src="images/icons8-mobile-phone-50.png" alt="">
<label  class="text-white cursor-pointer">Mobil, tablet</label>
</div>
<div class="text-2xl flex space-x-6 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-slate-500/55 duration-300 rounded" style="flex-direction: row;
flex-wrap: wrap;
align-content: center;
justify-content: center;
align-items: center;"> 
</button>
<button class="text-white w-32 bg-slate-600/30 hover:bg-slate-600/70 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
<img class="m-auto" src="images/icons8-controller-50.png" alt="">
<label  class="text-white cursor-pointer">Konzol</label>
</div>
<div class="text-2xl flex space-x-6 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-slate-500/55 duration-300 rounded" style="flex-direction: row;
flex-wrap: wrap;
align-content: center;
justify-content: center;
align-items: center;"> 
</button>
<button class="text-white w-32 bg-slate-600/30 hover:bg-slate-600/70 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
<img class="m-auto" src="images/icons8-headphones-50.png" alt=""   >
   <label  class="text-white cursor-pointer">TV-audió</label>
</div>
<div class="text-2xl flex space-x-6 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-slate-500/55 duration-300 rounded" style="flex-direction: row;
flex-wrap: wrap;
align-content: center;
justify-content: center;
align-items: center;"> 
</button>
<button class="text-white w-32 bg-slate-600/30 hover:bg-slate-600/70 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
<img class="m-auto" src="images/icons8-camera-50.png" alt="">
<label  class="text-white cursor-pointer">Fotó-videó</label>
</div>
<div class="text-2xl flex space-x-6 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-slate-500/55 duration-300 rounded" style="flex-direction: row;
flex-wrap: wrap;
align-content: center;
justify-content: center;
align-items: center;"> 
</button>
<button class="text-white w-32 bg-slate-600/30 hover:bg-slate-600/70 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
<img class="m-auto" src="images/icons8-bicycle-50.png" alt="">
<label  class="text-white cursor-pointer">Egyéb</label>
</div>
</button>
</div>

        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Hirdetések</h1>
        <div class="space-y-6">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="bg-white p-5 rounded-xl shadow-md flex flex-col sm:flex-row items-center space-x-0 sm:space-x-4 border border-gray-200">
                    <?php if (file_exists($row['kep_url'])): ?>
                        <img src="<?= htmlspecialchars($row['kep_url']) ?>" alt="<?= htmlspecialchars($row['cim']) ?>" class="w-32 h-32 object-cover rounded-lg">
                    <?php endif; ?>
                    <div class="flex-1 text-center sm:text-left">
                        <h2 class="text-xl font-semibold text-gray-800"> <?= htmlspecialchars($row['cim']) ?></h2>
                        <p class="text-gray-600"><strong>Kategória:</strong> <?= htmlspecialchars($row['kategoria']) ?></p>
                        <p class="text-gray-700 mt-2"> <?= nl2br(htmlspecialchars(substr($row['leiras'], 0, 100))) ?>...</p>
                    </div>
                    <form action="pages/reszletek.php" method="POST" class="mt-4 sm:mt-0">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            További információ
                        </button>
                    </form>
                </div>
            <?php endwhile; ?>
        </div>


</div>

</div>
<?php 

include_once "./pages/footer.php";

?>


    
    <script src="js/main.js"></script>
  </body>
</html>