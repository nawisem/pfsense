<?php
    include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
             
            }
            .banner{
                width: 100%;
                height: 100vh;
                background-size: cover;
                background-position: center;
                animation: change 20s infinite ease-in-out;
                position: relative;
                background-repeat: no-repeat;
                overflow: hidden;
            }
            .navbar{
                width: 85%;
                margin: auto;
                padding: 35px 0;
                display: flex;
                align-items: center;
                justify-content: space-around;
            }
            .navbar ul li{
                list-style: none;
                display: inline-block;
                margin: 0 45px;
                position: relative;
            }
            .navbar ul li a{
                text-decoration: none;
                color: white;
                text-transform: uppercase;
            }
            .navbar ul li::after{
                content: '';
                height: 3px;
                width: 0%;
                background: #009688;
                position: absolute;
                left: 0;
                bottom: -10px;
                transition: .5s;
            }
            .navbar ul li:hover:after{
                width: 100%;
            }
            .content{
                width: 100%;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                text-align: center;
                color: white;
            }
            .content h1{
                font-size: 70px;
                margin-top: 80px;
            }
            .content p{
                margin: 20px auto;
                font-weight: 100;
                line-height: 25px;
            }
            button{
                width: 200px;
                padding: 15px 0;
                text-align: center;
                margin: 20px 10px;
                border-radius: 25px;
                font-weight: bold;
                border: 2px solid #009688;
                background: transparent;
                color: #fff;
                cursor: pointer;
                position: relative;
            }
            span{
                background: #009688;
                height: 100%;
                width: 0%;
                border-radius: 25px;
                position: absolute;
                left: 0;
                bottom: 0;
                z-index: -1;
                transition: .5s;
            }
            button:hover span{
                width: 100%;
            }
            button:hover{
                border: none;
            }
            @keyframes change{
                0%{
                    background-image: url(gambar/food.jpg);
                }
                20%{
                    background-image: url(gambar/restaurant4.jpg);
                }
                40%{
                    background-image: url(gambar/restaurant.jpg);
                }
                60%{
                    background-image: url(gambar/restaurant1.jpg);
                }
                80%{
                    background-image: url(gambar/restaurant2.jpg);
                }
                100%{
                    background-image: url(gambar/restaurant3.jpg);
                }
            }
            @media(max-width: 768px){
                .navbar ul li {
                list-style: none;
                display: inline-block;
                margin: 0 1px;
                position: relative;
            }
            .navbar {
                margin: auto;
                padding: 35px 0;
                display: flex;
                align-items: center;
                font-size: 13px;
                word-spacing: 10px;
                justify-content: space-around;
            }
            .content h1{
                font-size: 50px;
                margin-top: 80px;
                padding: 10px;
            }
}
        </style>
    </head>
    <body>
        <div class="banner">
           <div class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menus</a></li>
                <li><a href="#">Table</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
           </div>
           <div class="content">
            <h1>CHOOSE YOUR MENU</h1>
            <p>Customer Satisfaction Is Our Responsibility :)
                <br>press the bell icon to get more info</p>
                <div>
                    <button type="button"><span></span>DINE IN</button>
                    <button type="button"><span></span>TAKE AWAY</button>
                </div>
           </div>
        </div>
    </body>