<?php
session_start();
?>
<html>
    <head>
        <title>GamingSathi</title>
        <link rel="stylesheet" href="style.css">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link href="css/all.css" rel="stylesheet" type="text/css" />
<link href="webfonts/" rel="stylesheet" type="text/css" />
        
    </head>
    <body >
        
        <div name="container" class="container">
        <div name="toplink" id="toplink">
            <div name="social" id="social">
                <ul>
                    <li><a href="signup.php"><?php 
                    if(isset($_SESSION['username']))
                    {
                        echo "Add";
                    }
                    else{
                        echo "Signup";
                    }
                    ?></a></li>
                    <li><a href="logout.php"><?php if(isset($_SESSION['username']))
                    {
                        echo "Logout";
                    }
                    else{
                        echo "Login";
                    }
                    ?></a></li>
                    <li><a href="">RSS feeds</a></li>
                    <li><a href="" style="border:unset;">Archieved News</a></li>
                </ul>
            </div>
            <div name="icon" id="icon">
                <ul>
                    <li><a href="#" class="fab fa-facebook-f"></a></li>
                    <li><a href="#" class="fab fa-twitter"></a></li>
                    <li><a href="#" class="fab fa-google-plus-g"></a></li>
                    <li><a href="#" class="fab fa-linkedin-in"></a></li>
                </ul>

            </div>
        </div>
        <div name="menu" id="menu">
            <ul class="deep">
                <li><a href="index.php"  id="man">HOMEPAGE</a></li>
                <li><a href="">MARKET</a></li>
                <li><a href="">GALLERY</a></li>
                <li><div class="dropdown">
                        <a href="">COMMUNITY</a>
                        <div class="dropdown-content">
                          <a href="">STREAM</a>
                          <a href="">DISCUSSIONS</a>
                        </div>
                      </div></li>
                <li><a href="esports.php">ESPORTS</a></li>
            </ul>

        </div>
        
