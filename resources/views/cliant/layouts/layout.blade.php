<!DOCTYPE html>
<html lang="eg">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="E-commerce Website" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Metro Book Shop</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"/>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-yYzNxF2f3u2w0tGMyZPhuHh4VRgFA9lYqTqF+TxxtF4XtZxg1Cq/NokbJ5QZ18J1AyH2CnWc7xh6ds55qFs5mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.7/css/flag-icon.min.css" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="shortcut icon" href="{{ asset('client_asset/img/logo3.jpg') }}" />
    <link rel="stylesheet" href="{{ asset('client_asset/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('client_asset/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('client_asset/css/elegant-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('client_asset/css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('client_asset/css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('client_asset/css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('client_asset/css/responsive.css') }}" type="text/css">

    <!--End Css Styles -->
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>
    @include('cliant.layouts.header')
    @include('cliant.layouts.nav')
    @include('cliant.layouts.downbar')
    @yield('content')
    @include('cliant.layouts.footer')



     <!-- Js Plugins -->
     <script src="{{ asset('client_asset/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('client_asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('client_asset/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('client_asset/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('client_asset/js/main.js') }}"></script>

     <script
       src="https://kit.fontawesome.com/9498bdc1c3.js"
       crossorigin="anonymous"
     ></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
       <script>
         $('.brand-carousel').owlCarousel({
             loop: true,
             margin: 10,
             autoplay: true,
             autoplayTimeout: 500,
             responsive: {
                 0: {
                     items: 1
                 },
                 600: {
                     items: 3
                 },
                 1000: {
                     items: 10
                 }
             }
         });

         document.addEventListener("DOMContentLoaded", function () {
   const dropdownIcons = document.querySelectorAll(".dropdown-icon");

   dropdownIcons.forEach(icon => {
     icon.addEventListener("click", function (event) {
       event.stopPropagation(); // Prevent the click from affecting other elements
       const subMenu = this.nextElementSibling;

       if (subMenu.style.display === "block") {
         subMenu.style.display = "none";
       } else {
         // Hide all other open menus
         document.querySelectorAll(".sub-menu").forEach(menu => {
           menu.style.display = "none";
         });
         subMenu.style.display = "block";
       }
     });
   });

   // Close dropdown if clicking outside
   document.addEventListener("click", function (event) {
     if (!event.target.closest(".dropdown")) {
       document.querySelectorAll(".sub-menu").forEach(menu => {
         menu.style.display = "none";
       });
     }
   });
 });


     </script>

     <!--End Js Plugins -->
   </body>
 </html>
