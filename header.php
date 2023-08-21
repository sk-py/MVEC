<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Styles/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Fira+Sans:wght@200;
        400&family=Jost:wght@300;400;600&family=Manrope:wght@200;300;400;500;600;700;800&family=Montserrat:wght@200;300;400;800&family=Varela+Round&display=swap"
        rel="stylesheet">

</head>

<body>
    <!------------------------------------------------Navbar for small/medium Screen------------------------------------->

    <nav id="mobile_navbar">
        <h3>Log</h3>
        <form action="" method="post">
            <input type="search" placeholder="Looking for...?">
            <i class="fa-solid fa-magnifying-glass" style="color:black"></i>
        </form>
        <?Php
        if (isset($_SESSION['auth'])) {
            echo <<<Buttons
                        <span>
                            <a class="auth_btn" href="login.html">Sign in</a>&nbsp;&nbsp;
                           
                        </span>
                    Buttons;
        } else {
            echo <<<Dropdown
                          <div class="custom-dropdown">
                            <a class="custom-dropdown-toggle" href="#">
                               <h3 style="color: #ffffff;"> <i class="fa-solid fa-circle-user" style="color: #ffffff;"></i>&nbsp;&nbsp;<i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></h3> 
                            </a>
                            <ul class="custom-dropdown-menu">
                            <li><a href="#">Add Product</a></li>
                                <li><a href="#">My Products</a></li>
                                <li><a href="#">Logout</a></li>
                                
                            </ul>
                        </div>

                    Dropdown;
        }
        ?>
    </nav>

    <!------------------------------------------------Navbar for Large Screen------------------------------------->
    <nav id="navbar_me">

        <h1>Logo</h1>

        <ul id="ul_large">
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Latest Products</a></li>
            <li><a href="#footer">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>

        <?Php
        if (isset($_SESSION['auth'])) {
            echo <<<Buttons
                        <span>
                            <a class="auth_btn auth_btn2" href="login.html">Sign in</a>&nbsp;
                            <!--<a class="auth_btn auth_btn2" href="login.html">Sign up</a>-->
                        </span>
                    Buttons;
        } else {
            echo <<<Dropdown
                          <div class="custom-dropdown custom-dropdown_mobile ">
                            <a class="custom-dropdown-toggle" href="#">
                               <h3 style="color: #ffffff;"> <i class="fa-solid fa-circle-user" style="color: #ffffff;"></i>&nbsp; Student &nbsp;<i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></h3> 
                            </a>
                            <ul class="custom-dropdown-menu">
                            <li><a href="#">Add Product</a></li>
                                <li><a href="#">My Products</a></li>
                                <li><a href="#">Logout</a></li>
                                
                            </ul>
                        </div>

                    Dropdown;
        }
        ?>

    </nav>

    <!--------------------------------------------------------------Navbar End------------------------------------------------------------->


    <!-------------------------------------------------Carousel-------------------------------------------------------------------------------->
    <div class="slide-container">
        <div class="slide">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Beauty/GW/ATF/1500x600sss._CB597759515_.jpg"
                alt="">
        </div>

        <div class="slide">
            <img src="https://images-eu.ssl-images-amazn.com/images/G/31/img23/Beauty/GW/ATF/1500x600sss._CB597759515_.jpg"
                alt="">
        </div>

        <div class="slide">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Beauty/GW/ATF/1500x600sss._CB597759515_.jpg"
                alt="">
        </div>

        <div class="slide">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Beauty/GW/ATF/1500x600sss._CB597759515_.jpg"
                alt="">
        </div>

        <span class="arrow prev" onclick="controller(-1)">&#10094;</span>
        <span class="arrow next" onclick="controller(1)">&#10095;</span>
    </div>

    <script src="../Scripts/index.js"></script>


    <div style="height: 100vh;width:100svw;background-color: #ffff;">
    </div>
    <div style="height: 100vh;width:100svw;;background-color: #000;">
    </div>
    <div id="footer" style="height: 100vh;width:100svw;;background-color: #fff;">
    </div>
    <nav id="bottom-nav">
        <span id="ul_small">
            <i class="fa-solid fa-house" style="color: #ffffff;"></i>
            <i class="fa-solid fa-store" style="color: #ffffff;"></i>
            <span> <i class="fa-solid fa-circle-plus"></i></span>
            <i class="fa-solid fa-circle-info" style="color: #ffffff;"></i>
            <i class="fa-regular fa-user" style="color: #ffffff;"></i>
        </span>
    </nav>
</body>

</html>