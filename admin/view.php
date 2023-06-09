<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" href="../stylesheets/output.css">
        <link rel="icon" type="../image/x-icon" href="../images/icon.png" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
  <body style="background-image: url(../images/background_bw.png); color: black;" class="bg-cover bg-no-repeat">
      <header class="bg-black text-white">
          <nav class="flex justify-between items-center py-4 px-6 md:px-10">
            <div class="mr-4">
              <a href="../index.html">
                <img src="../images/logo_long_white.png" alt="logo_long_white" class="h-12">
              </a>
            </div>
            <div class="flex items-center">
              <div class="hidden lg:block">
                <button><a href="index.html" class="mx-4 hover:text-cyan-300 uppercase text-xl font-semibold">Home</a></button>
                <button><a href="events.html" class="mx-4 hover:text-cyan-300 uppercase text-xl font-semibold">Events</a></button>
                <button><a href="aboutUs.html" class="mx-4 hover:text-cyan-300 uppercase text-xl font-semibold">About Us</a></button>
                <button><a href="admin/view.php" class="mx-4 text-cyan-500 hover:text-cyan-300 uppercase text-xl font-semibold">Gallery</a></button>
                <button><a href="contact.html" class="mx-4 hover:text-cyan-300 uppercase text-xl font-semibold">Contact</a></button>
              </div>
              <button class="lg:hidden flex items-center px-3 py-2 border rounded text-gray-400 border-gray-400 hover:text-white hover:border-white" id="mobile-menu-button">
                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>Menu</title>
                  <path d="M0 3h20v2H0zm0 6h20v2H0zm0 6h20v2H0z"/>
                </svg>
              </button>
            </div>
          </nav>
          <div class="lg:hidden hidden bg-zinc-900" id="mobile-menu">
            <a href="../index.html" class="block py-2 px-4 text-sm hover:text-cyan-300 uppercase font-semibold">Home</a>
            <a href="../events.html" class="block py-2 px-4 text-sm hover:text-cyan-300 uppercase font-semibold">Events</a>
            <a href="../aboutUs.html" class="block py-2 px-4 text-sm hover:text-cyan-300 uppercase font-semibold">About Us</a>
            <a href="view.php" class="block py-2 px-4 text-sm text-cyan-500 hover:text-cyan-300 uppercase font-semibold">Gallery</a>
            <a href="../contact.html" class="block py-2 px-4 text-sm hover:text-cyan-300 uppercase font-semibold">Contact</a>
          </div>
        </header>
    
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>

<footer class="bg-black text-white mt-20">
          <div class="max-w-6xl mx-auto py-8 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center">
              <div class="mr-4">
                  <img src="../images/logo_long_white.png" alt="logo_long_white" class="h-12">
              </div>
            <div>
              <p class="text-sm">&copy; 2023 Dyoevents - Alle Rechte vorbehalten.</p>
            </div>
            <div class="flex justify-center sm:justify-end items-center mt-4 sm:mt-0">
              <a href="https://chat.whatsapp.com/CoG6rfLFqCa0LwHg7K5Doy" class="mx-2  hover:text-cyan-300"><i class="fab fa-whatsapp fa-2xl"></i></a>
              <a href="https://www.tiktok.com/@dyoevents" class="mx-2 hover:text-cyan-300"><i class="fab fa-tiktok fa-2xl"></i></a>
              <a href="https://www.instagram.com/dyoevents/" class="mx-2 hover:text-cyan-300"><i class="fab fa-instagram fa-2xl"></i></a>
              <a href="mailto:admin@dyoevents.ch" class="mx-2 hover:text-cyan-300"><i class="fas fa-envelope fa-2xl"></i></a>
            </div>
          </div>
        </footer>

        <script>
          const mobileMenuButton = document.querySelector('#mobile-menu-button');
          const mobileMenu = document.querySelector('#mobile-menu');
          mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
          });
        </script>
  </body>
</html>