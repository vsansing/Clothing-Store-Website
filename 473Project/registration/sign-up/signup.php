<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/login-signup.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
        <script src="signup.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <ul>
                <!-- Logo that links to the index page -->
                <li>
                     <img src="/473Project/assets/images/ZAS.png" class="logo" onclick="window.location.href='/473Project/website-files/index-page/index.html'">
                 </li>
     
                 <!-- Mens Nav Selection -->
                 <li class="dropdown">
                      <a href="/473Project/website-files/mens-pages/Mens.php" class="dropbtn">Men's</a> 
                         <div class="dropdown-content">
                             <a href="/473Project/website-files/mens-pages/Mens-Tops.php">Tops</a>
                             <a href="/473Project/website-files/mens-pages/Mens-Bottoms.php">Bottoms</a>
                             <a href="/473Project/website-files/mens-pages/Mens-Accessories.php">Accessories</a>
                             <a href="/473Project/website-files/mens-pages/Mens-Shoes.php">Shoes</a>
                             <a href="/473Project/website-files/mens-pages/Mens-Swimwear.php">Swimwear</a>
                         </div>
                 </li>
     
     
                 <!-- Womens Nav Selection -->
                 <li class="dropdown">
                      <a href="/473Project/website-files/womens-pages/Womens.php" class="dropbtn">Women's</a>
                         <div class="dropdown-content">
                             <a href="/473Project/website-files/womens-pages/Womens-Tops.php">Tops</a>
                             <a href="/473Project/website-files/womens-pages/Womens-Bottoms.php">Bottoms</a>
                             <a href="/473Project/website-files/womens-pages/Womens-Accessories.php">Accessories</a>
                             <a href="/473Project/website-files/womens-pages/Womens-Shoes.php">Shoes</a>
                             <a href="/473Project/website-files/womens-pages/Womens-Swimwear.php">Swimwear</a>
                         </div>
                 </li>
     
                 <!-- Unisex Nav Selection -->
                 <li class="dropdown">
                      <a href="/473Project/website-files/unisex-pages/Unisex.php" class="dropbtn">Unisex</a>
                         <div class="dropdown-content">
                             <a href="/473Project/website-files/unisex-pages/Unisex-Tops.php">Tops</a>
                             <a href="/473Project/website-files/unisex-pages/Unisex-Bottoms.php">Bottoms</a>
                             <a href="/473Project/website-files/unisex-pages/Unisex-Accessories.php">Accessories</a>
                             <a href="/473Project/website-files/unisex-pages/Unisex-Shoes.php">Shoes</a>
                             <a href="/473Project/website-files/unisex-pages/Unisex-Swimwear.php">Swimwear</a>
                         </div>
                 </li>
     
                 <!-- Cart Button -->
                 <li id="cartButton"> <a href="#"> <i class="fas fa-shopping-cart"></i> </a> </li>
                 
                 <!-- Check if user is logged in -->
                 <?php
                     session_start();
                     $loginStatus = $_SESSION["loggedIn"];
     
                     if($loginStatus == 1){
                         echo("<li id='accountButton'> <a href='/473Project/registration/account/account.php' class='active'> <i class='fas fa-user'></i> </a> </li>");
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
        <!------------------------------------------------- Signup Box --------------------------------------------------->

        <div class="Page-Content">

            <div class="signup-container">

                <form action="signupSubmit.php" method="POST" class="signup-box"> 
                    <h1>Sign up</h1>
                    <a href="/473Project/registration/login/login.html" id="link">Already have an account?</a>
                    <hr>

                    <div class="input-chunk">
                        Username * <br> 
                        <input type="text" name="username" id="username" class="input-item" size="30" placeholder="john_doe" onchange="checkInput();">
                    </div>

                    <div class="input-chunk">
                        First Name <br> 
                        <input type="text" name="firstName" id="firstName" class="input-item" size="30" placeholder="John">
                    </div>

                    <div class="input-chunk">
                        Last Name <br> 
                        <input type="text" name="lastName" id="lastName" class="input-item" size="30" placeholder="Doe">
                    </div>

                    <div class="input-chunk">
                        Email Address *<br> 
                        <input type="email" name="emailAddress" id="emailAddress" class="input-item" size="30" placeholder="john_doe@doe.com" onchange="checkInput();">
                    </div>

                    <div class="input-chunk">
                        Phone Number <br>   
                        <input type="text" name="areaCode" id="areaCode" maxlength="3" size="3" class="input-item" placeholder="(123)" style="text-align: center;">-
                        <input type="text" name="phone1" id="phone1" maxlength="3" size="3" class="input-item" placeholder="456" style="text-align: center;">-
                        <input type="text" name="phone2" id="phone2" maxlength="4" size="4" class="input-item" placeholder="7890" style="text-align: center;">
                    </div>

                    <div class="input-chunk">
                        Password *<br> 
                        <input type="password" name="password1" id="pass1" class="input-item" size="30" placeholder="Password" onchange="checkInput();">
                    </div>
        
                    <div class="input-chunk">
                        Confirm Password *<br> 
                        <input type="password" name="password2" id="pass2" class="input-item" size="30" placeholder="Password" onchange="checkInput();">
                    </div>

                    <hr>
                    The * indicates a required field. <br>
                    By sigining up you are agreeing   <br>
                    to our Terms and Conditions.      <br>


                    <input type="submit" id="submit-button" value="Sign Up">  
                </form>
            </div>
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <div class="bottom-panel">
                <a href="/473Project/support-pages/About.php" >About Us</a>
                <a href="/473Project/support-pages/Careers.php">Careers</a>
                <a href="/473Project/support-pages/FAQ.php">FAQ</a>
                <a href="/473Project/support-pages/CustomerSupport.php">Customer Support</a>
            </div>
    </body>
</html>