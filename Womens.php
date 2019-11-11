<!-- Developed by Jackson Zaunegger and Victor Sansing -->
<!-- Images from Pixabay.com, and W3Schools used as a refrence. -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Women's Clothing</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!-------------------------------------------------- Nav Bar ------------------------------------------------>
        <ul>
            <!-- Mens Nav Selection -->
            <li class="dropdown">
                 <a href="Mens.html" class="active">Men's</a> 
                    <div class="dropdown-content">
                        <a href="/473Project/website-files/mens-pages/Mens-Tops.php">Tops</a>
                        <a href="#">Bottoms</a>
                        <a href="#">Accessories</a>
                        <a href="#">Shoes</a>
                        <a href="#">Swimwear</a>
                    </div>
            </li>


            <!-- Womens Nav Selection -->
            <li class="dropdown">
                 <a href="#" class="dropbtn">Women's</a>
                    <div class="dropdown-content">
                        <a href="/473Project/website-files/womens-pages/Womens-Tops.php">Tops</a>
                        <a href="#">Bottoms</a>
                        <a href="#">Accessories</a>
                        <a href="#">Shoes</a>
                        <a href="#">Swimwear</a>
                    </div>
            </li>

            <!-- Unisex Nav Selection -->
            <li class="dropdown">
                 <a href="#" class="dropbtn">Unisex</a>
                    <div class="dropdown-content">
                        <a href="#">Tops</a>
                        <a href="#">Bottoms</a>
                        <a href="#">Accessories</a>
                        <a href="#">Shoes</a>
                        <a href="#">Swimwear</a>
                    </div>
            </li>

            <li id="cartButton"> <a href="#"> <i class="fas fa-shopping-cart"></i> </a> </li>
            <li id="loginButton"> <a href="/473Project/registration/login/login.html">Login / Sign Up</a> </li>
            <li id="searchContainer"> 
                <form action="search.php" method="POST">
                    <input type="text" placeholder="Search.." size="30" id="searchBar">
                    <button type="submit" id="searchIcon"> <i class="fa fa-search"></i> </button>
                </form>
            </li>
        </ul>
<!-- Check if user is logged in -->
<?php
               session_start();

               if (isset($_SESSION['loggedIn'])) {
                   $loginStatus = $_SESSION["loggedIn"];

                   if($loginStatus == 1){
                       echo("<li id='accountButton'> <a href='/473Project/registration/account/account.php'> <i class='fas fa-user'></i> </a> </li>");
                   }
               }
               else{
                   echo("<li id='loginButton'> <a href='/473Project/registration/login/login.html'>Login / Sign Up</a> </li>");
               }
            ?>

            <!-- Search the website for something -->
            <li id="searchContainer"> 
                <form action="search.php" method="POST">
                    <input type="text" placeholder="Search.." size="30" id="searchBar">
                    <button type="submit" id="searchIcon"> <i class="fa fa-search"></i> </button>
                </form>
             </li>
        </ul>
        <!-- Page Contents -->
        <div class="Page-Content">

            <h1 class="Page-Title">Women's Clothing</h1>

            <div class="category">
                <div class="Header"> New Arrivals </div>

                <div class="image-slideshow">
                    <i class="fas fa-chevron-left" id="arrowButtonLeft"  onclick="plusSlides(-1)"></i>

                    <div class="slide">
                        <div class="price">$45.00</div>
                        <img src="/473Project/assets/images/index/womens-denim.jpg" style="width:90%">
                        <div class="description">Blue Denim</div>
                    </div>

                    <i class="fas fa-chevron-right" id="arrowButtonRight"  onclick="plusSlides(1)"></i>
                </div>

                <div class="Footer"> 
                    <button class="shopButton"> Shop New Arrivals </button>
                </div>

            </div>

        </div>

         <!-- Bottom Panel -->
         <div class="bottom-panel">
            <a href="#">About Us</a>
            <a href="#">Careers</a>
            <a href="#">FAQ</a>
            <a href="#">Customer Support</a>
        </div>

        <script>
            function linkHome(){
                window.location.href="/473Project/website-files/index-page/index.php"
            }
        </script>
        
    </body>
</html>