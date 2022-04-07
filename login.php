<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'databases/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num >= 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");


    }
    else{
        $showError = "invalid";
    }  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="body.css">
    <title>login page</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;

    }

    .container {
        border: 2px solid rgba(0, 0, 0, 0.445);
        width: 475px;
        height: 450px;
        margin: 90px auto;
        background-color: white;
    }

    h1 {
        margin: 0px 0px 40px 0px;
        position: relative;
        left: 200px;
        color: black;
    }

    label {
        position: relative;
        font-weight: 700;
        margin: 10px 0px;
        left: 90px;
    }

    form input[name=username] {
        margin: 0px 0px 12px 0px;
        padding: 10px;
        width: 265px;
        position: relative;
        left: 90px;

    }

    form input[name=password] {
        margin: 0px 0px 35px 0px;
        padding: 10px;
        width: 265px;
        position: relative;
        left: 90px;
    }

    form .btnn {
        margin: 0px 0px 12px 0px;
        padding: 10px;
        width: 290px;
        position: relative;
        left: 90px;
        cursor: pointer;
        background-color: rgba(255, 166, 0, 0.897);

    }
    .btnn:hover{
            background-color: rgba(255, 166, 0, 0.575);
           
    }
     .btna {
        margin: 0px 0px 12px 0px;
        padding: 10px;
        width: 290px;
        position: relative;
        left: 90px;
        cursor: pointer;
        background-color:gainsboro;

    }
    .btna:hover{
            background-color: rgba(255, 166, 0, 0.575);
           
    }

    form input[name=remember] {

        position: relative;
        left: 90px;
    }

    ul a {

        font-size: 18px;
        text-decoration: none;
        position: relative;
        left: 260px;
        bottom: 20px;

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
                <a href="contact.html">Contact</a>
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
    <?php
    if($login){
       echo '<div style="background-color:#32CD32;color:white;padding:0.8%;">
        Welcome to our website</div>';
    }
    ?>
    <?php
    if($showError){
       echo '<div style="background-color:#FF0000;color:white;padding:0.8%;">
        invalid credentials.... please check once!!</div>';
    }
    ?>
    
    <div class="container"> <br>
        <h1>Sign In</h1>
        <form action="login.php" method = "post">
            <label for="username">Username/email</label><br>
            <input type="email" name="username" id="email" placeholder="Enter Username*" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password*" required><br>
            <button class="btnn" onclick="validate()" onclick="window.location.href='index.php'">login</button><br>

            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label><br>

            <ul><a href="forgot.php">forgot password?</a></ul><br>
            

        </form>
        <button class="btna" onclick="window.location.href='sign-up.php'">Create your Amazon account</button>

    </div>
    
</body>

</html>