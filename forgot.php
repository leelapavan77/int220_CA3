<?php

session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;

    }
    h1{
        color: blue;
        position: relative;
        left: 582px;
        margin-top: 27px;
    }
    p{
        color: black;
        position: relative;
        left: 400px;
        margin-top: 10px;
        font-size: 21px;
    }
    input{
        color: black;
        position: relative;
        left: 400px;
        margin-top: 10px;
        background-color: #f2f2f2;
        padding: 8px;
        width: 205px;

    }
    button {
            background-color: #04AA6D;
            position: relative;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            left: 400px;
            margin-top: 20px;
        }
         
          
</style>
<body>
    
    <div class="container">
    <h1>Forgot Your Password </h1>
    <p>Enter your email or username. We'll email instructions on how to reset your password</p>

    <p><b>Need help?</b></p>
    <form action="index.php">
    <input type="tel" type="email"  name="username" id="name" placeholder="Enter Username*" required><br>
    <input type="email" name="email" id="email" placeholder="Enter Email*"><br>
    <button type="submit">Submit</button>
    </form>
    </div>
    
    
 

</body>
</html>