<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="body.css">
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <script src="index.js"></script>


    <title>online shopping site for everything!!!!</title>
</head>
<style>
    .container{
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }
    .container2{
        position: relative;
        top: 336px;
        left: -273px;
        font-family: "Amazon Ember",Arial,sans-serif;
    }
    .no_order{
        padding: 15px;
        background-color: skyblue;
        border-radius: 5px;
        cursor: pointer;
        font-family: "Amazon Ember",Arial,sans-serif;
    }
    .no_order:hover{
        background-color: steelblue;
    }
    
    
   
    
</style>

<body>
    <header>
        <nav>
            <div class="logo">
               <a href="index.php" ><img src="images/amazon.png" alt="" width="130px"></a>
            </div>


            <!-- <ul>
                <li class="active"><a href="home.html">home</a></li>
                <li><a href="about.html">about</a></li>
                <li><a href="contact.html">contact</a></li>
            </ul> -->
            <div class="search">
                <input type="text" placeholder="search here">
                <button class="fsearch"  onclick="refreshPage()">&#128269</button>
            </div>
            <div class="login">
                <button class="btn2" onclick="window.location.href='login.php'">login/signup</button>

            </div>


            <div class="flag">
                <img src="images/Flag-India.jpg" alt="" width="30px">
            </div>
            <div class="drop">

                <select name="cars" id="cars">

                    <option value="AF">EN</option>
                    <option value="AL">HI</option>
                    <option value="DZ">TA</option>
                    <option value="DZ">TE</option>
                    <option value="DZ">KN</option>
                    <option value="DZ">ML</option>
                    <option value="DZ">MR</option>
                    <option value="DZ">BN</option>


                </select>
            </div>
            <button class="order" onclick="window.location.href='orders.php'"> Orders</button>
            <img id="cart" src="images/cartt.png" alt="">
            <button class="cart" onclick="window.location.href='cart.php'">Cart</button>




        </nav>
        <!-- second nav -->
        <div class="nav2">
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <h4 style="color: black;padding-left: 42px;">Trending</h4>
                <a href="#">Best Sellers</a>
                <a href="#">New releases</a>
                <a href="#">Movers and Shakers</a><hr>
                <h4 style="color: black;padding-left: 42px;">Shop by Department</h4>
                <a href="#">Mobiles, Computers</a>
                <a href="#">Tv, Appliances, Electronics</a>
                <a href="#">Women's Fashion</a>
                <a href="#">Men's Fashion</a><hr>
                <h4 style="color: black;padding-left: 42px;">Programs & Features</h4>
                <a href="#">Gift card & Mobile Recharges</a>
                <a href="#">Flight Tickets</a>
                <a href="#">#FoundItOnAmazon</a>
                <a href="#">Amazon Outlet</a><hr>
                <h4 style="color: black;padding-left: 42px;">Help & Settings</h4>
                <a href="contact.php">Contact</a>
                <a href="#">About</a>
                <a href="sign-out.php">Sign-out</a>
              </div>
              
              <div id="main">
                <button class="openbtn" onclick="openNav()">☰ All</button>
                <button class="openbtn" onclick="refreshPage()">Fresh</button>
                <button class="openbtn" onclick="refreshPage()">Amazon Pay</button>
                <button class="openbtn" onclick="refreshPage()">Gift Cards</button>
                <button class="openbtn" onclick="refreshPage()">Best Sellers</button>
                <button class="openbtn" onclick="refreshPage()">Browsing History</button>
                <button class="openbtn" onclick="refreshPage()">Kindle eBooks</button>
                <button class="openbtn" onclick="refreshPage()">Buy Again</button>
                <button class="openbtn" onclick="refreshPage()">Baby</button>
                <button class="openbtn" onclick="refreshPage()">Pet Supplies</button>
                <button class="openbtn" onclick="refreshPage()" >Gift ideas</button>
               <button class="openbtn"  onclick="refreshPage()"><img src="images/prime.jpg" alt="" width="55px"></button>
               <button class="openbtn"  onclick="refreshPage()"><img src="images/amlogo.jpg" alt="" width="20px">    Shopping made easy | Download the app</button>
                
                
              </div>
              
              
              
        </div>
        

    </header>
    <br>
    <div class="container">
        <img id="dog" src="images/dog.png" alt=""> <br>
        <div class="container2">
            <h1>OOPS!</h1>
            <h3>Your Cart is Empty!!</h3> <br>
            <button class="no_order" onclick="window.location.href='index.php'">Continue Shopping</button><br> 
            </div>
        

    </div>
    
   
        
</body>
    </html>