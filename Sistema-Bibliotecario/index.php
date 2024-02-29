<?php

include ('app/config/config.php');

include ('app/config/conexion.php');
//echo $URL;
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>A World</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="index.html"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Incio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="contact.html">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="index.php"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/LOGOB.png"></a></div>
            <div class="menu_main">
               <ul>
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact us</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="banner_taital">Explora nuestra biblioteca</h1>
                     <p class="banner_text">Descubre una amplia variedad de libros para leer y disfrutar</p>
                     <div class="read_bt"><a href="#">Explorar libros</a></div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">Explora nuestra biblioteca</h1>
                     <p class="banner_text">Descubre una amplia variedad de libros para leer y disfrutar</p>
                     <div class="read_bt"><a href="#">Explorar libros</a></div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">Explora nuestra biblioteca</h1>
                     <p class="banner_text">Descubre una amplia variedad de libros para leer y disfrutar</p>
                     <div class="read_bt"><a href="#">Explorar libros</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Services </h1>
         <p class="services_text">Descubre una experiencia única con nuestros servicios especializados. Desde emocionantes aventuras al aire 
            libre hasta momentos de relajación, estamos aquí para ofrecerte una amplia gama de opciones para satisfacer tus necesidades. </p>
         <div class="services_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/imagen1.png" class="services_img"></div>
                  <div class="btn_main"><a href="#">Rafting</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/imagen2.png" class="services_img"></div>
                  <div class="btn_main active"><a href="#">Hiking</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/imagen3.png" class="services_img"></div>
                  <div class="btn_main"><a href="#">Camping</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               <div class="about_taital_main">
                  <h1 class="about_taital">Sobre nosotros</h1>
                  <p class="about_text">Bienvenido a nuestro Sistema de Gestión de Bibliotecas (SGBL). Somos un equipo dedicado a proporcionar una experiencia de biblioteca digital eficiente y fácil de usar.

               Nuestro sistema está diseñado para facilitar la gestión de préstamos de materiales, permitiendo a los usuarios registrar préstamos y devoluciones, renovar préstamos y registrar multas por retrasos. 
               También ofrecemos un catálogo de materiales completo y fácil de navegar, con la capacidad de agregar,
               modificar y eliminar materiales, así como clasificar y etiquetar materiales para una búsqueda más fácil.</p>
                  <div class="readmore_bt"><a href="#">Read More</a></div>
               </div>
            </div>
            <div class="col-md-6 padding_right_0">
               <div><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/acerca.png" class="about_img"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- blog section start -->
   <div class="blog_section layout_padding">
      <div class="container">
         <h1 class="blog_taital">See Our Video</h1>
         <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered
            alteration in some form, by injected humour, or randomised words which</p>
         <div class="play_icon_main">
            <div class="play_icon"><a href="#"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/play-icon.png"></a></div>
         </div>
      </div>
   </div>
   <!-- blog section end -->
   <!-- client section start -->
   <div class="client_section layout_padding">
      <div class="container">
         <h1 class="client_taital">Testimonial</h1>
         <div class="client_section_2">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_main">
                        <div class="box_left">
                           <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                              dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                        </div>
                        <div class="box_right">
                           <div class="client_taital_left">
                              <div class="client_img"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/client-img.png"></div>
                              <div class="quick_icon"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/quick-icon.png"></div>
                           </div>
                           <div class="client_taital_right">
                              <h4 class="client_name">Dame</h4>
                              <p class="customer_text">Customer</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_main">
                        <div class="box_left">
                           <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                              dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                        </div>
                        <div class="box_right">
                           <div class="client_taital_left">
                              <div class="client_img"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/client-img.png"></div>
                              <div class="quick_icon"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/quick-icon.png"></div>
                           </div>
                           <div class="client_taital_right">
                              <h4 class="client_name">Dame</h4>
                              <p class="customer_text">Customer</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_main">
                        <div class="box_left">
                           <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                              dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                        </div>
                        <div class="box_right">
                           <div class="client_taital_left">
                              <div class="client_img"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/client-img.png"></div>
                              <div class="quick_icon"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/quick-icon.png"></div>
                           </div>
                           <div class="client_taital_right">
                              <h4 class="client_name">Dame</h4>
                              <p class="customer_text">Customer</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- client section start -->
   <!-- choose section start -->
   <div class="choose_section layout_padding">
      <div class="container">
         <h1 class="choose_taital">Why Choose Us</h1>
         <p class="choose_text">There are many variations of passages of Lorem Ipsum available, but the majority have
            suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
            embarrassing hidden in the middle of text. All </p>
         <div class="read_bt_1"><a href="#">Read More</a></div>
         <div class="newsletter_box">
            <h1 class="let_text">Let Start Talk with Us</h1>
            <div class="getquote_bt"><a href="#">Get A Quote</a></div>
         </div>
      </div>
   </div>
   <!-- choose section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="input_btn_main">
            <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
         </div>
         <div class="location_main">
            <div class="call_text"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/call-icon.png"></div>
            <div class="call_text"><a href="#">Call +01 1234567890</a></div>
            <div class="call_text"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/mail-icon.png"></div>
            <div class="call_text"><a href="#">demo@gmail.com</a></div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/fb-icon.png"></a></li>
               <li><a href="#"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/linkedin-icon.png"></a></li>
               <li><a href="#"><img src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/images/instagram-icon.png"></a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html
               Templates</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/js/jquery.min.js"></script>
   <script src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/js/popper.min.js"></script>
   <script src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/js/bootstrap.bundle.min.js"></script>
   <script src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/js/jquery-3.0.0.min.js"></script>
   <script src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/js/custom.js"></script>
   <!-- javascript -->
   <script src="<?php echo $URL;?>/app/config/templates/Biblioteca-Front/js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>