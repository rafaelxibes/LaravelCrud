<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

   <!--======== CSS ======== -->
   <link rel="stylesheet" href="assets/css/styles.css">

   <!--======== BOXICONS ======== -->
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

   <title>@yield('title')</title>
</head>
<body>
   @yield('content')
   <!--============== HEADER ============== -->
   <header class="header" id="header">
      <nav class="nav container">
         <a href="#" class="nav__logo">Laravel Crud</a>

         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <li class="nav__item">
                  <a href="#home" class="nav__link active-link">
                  <i class='bx bxs-user nav__icon'></i>
                  <span class="nav__name">Inicio</span>
                  </a>
               </li>

               <li class="nav__item">
                  <a href="#table" class="nav__link">
                  <i class='bx bxs-user-detail nav__icon'></i>
                  <span class="nav__name">Tabela</span>
                  </a>
               </li>
            </ul>
         </div>
      </nav>
   </header>

   <!--============== FOOTER ============== -->
   <footer>
      <p>RafaelXibes Crud &copy;</p>
   </footer>

    <!--======== Scripts ======== -->
    
    <!--===== GSAP ===== -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
   <!--===== MAIN JS ===== -->
   <script src="assets/js/scripts.js"></script>
</body>
</html>