<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
            function EnableDisableTextbutton(chk){
                var btnConnect=document.getElementById("btnConnect");
                btnConnect.disabled=chk.checked ? false : true;
                if (!btnConnect.disabled){
                    btnConnect.focus();
                }
            }
            function preventBack(){window.history.forward();}
                setTimeout("preventBack()",0)
                window.onunload = function(){null};
        </script>
        <style>
            *{
                margin: auto;
                padding: auto;
                box-sizing: border-box;
                font-family: 'Poppins',sans-serif;
            }
            body{
                overflow: hidden;
            }
            section{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: linear-gradient(to bottom,#f1f4f9,#dff1ff);
                position: relative;
                max-width:100%;
            }
            section .color{
                position: absolute;
                filter: blur(150px);
            }
            section .color:nth-child(1){
                top: -350px;
                width: 600px;
                height: 600px;
                background: #009688;
            }
            section .color:nth-child(2){
                bottom: -150px;
                left: 100px;
                width: 500px;
                height: 500px;
                background: #fffd87;
            }
            section .color:nth-child(3){
                bottom: -150px;
                right: 100px;
                width: 300px;
                height: 300px;
                background: #00d2ff;
            }
            section .error{
                background: #F2DEDE;
                color: #A94442;
                padding: 10px;
                width: 95%;
                border-radius: 5px;
                margin: 20px auto;
            }
            .box{
                position: relative;
                max-width:100%;
            }
            .box .square{
                position: absolute;
                backdrop-filter: blur(5px);
                box-shadow: 0 25px 45px rgba(0,0,0,0.1);
                border: 1px solid rgba(255,255,255,0.5);
                border-right: 1px solid rgba(255,255,255,0.2);
                border-bottom: 1px solid rgba(255,255,255,0.2);
                background: rgba(255,255,255,0.1);
                border-radius: 10px;
                animation: animate 10s linear infinite;
                animation-delay: calc(-1s * var(--i));
            }
            @keyframes animate{
                0%,100%{
                    transform: translateY(-40px);
                }
                50%{
                    transform: translateY(40px);
                }
            }
            .box .square:nth-child(1){
                top: -50px;
                right: -60px;
                width: 100px;
                height: 100px;
            }
            .box .square:nth-child(2){
                top: 150px;
                left: -100px;
                width: 120px;
                height: 120px;
                z-index: 2;
            }
            .box .square:nth-child(3){
                bottom: 50px;
                right: -60px;
                width: 80px;
                height: 80px;
                z-index: 2;
            }
            .box .square:nth-child(4){
                bottom: 80px;
                left: 100px;
                width: 50px;
                height: 50px;
            }
            .box .square:nth-child(5){
                top: -80px;
                left: 140px;
                width: 60px;
                height: 60px;
            }
            .container{
                position: relative;
                width: 400px;
                min-height: 400px;
                max-width:100%;
                background: rgba(255,255,255,0.1);
                border-radius: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                backdrop-filter: blur(5px);
                box-shadow: 0 25px 45px rgba(0,0,0,0.1);
                border: 1px solid rgba(255,255,255,0.5);
                border-right: 1px solid rgba(255,255,255,0.2);
                border-bottom: 1px solid rgba(255,255,255,0.2);
            }
            .form{
                position: relative;
                width: 100%;
                height: 100%;
                padding: 40px;
            }
            .form h2{
                position: relative;
                color: #fff;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: 1px;
                margin-bottom: 40px;
            }
            .form h2::before{
                content: '';
                position: absolute;
                left: 0;
                bottom: -10px;
                width: 80px;
                height: 4px;
                background: #fff;
            }
            .form .inputbox{
                width: 100%;
                margin-top: 20px;
            }
            .form .inputbox input{
                width: 100%;
                background: rgba(255,255,255,0.2);
                border: none;
                outline: none;
                padding: 10px 20px;
                border-radius: 35px;
                border: 1px solid rgba(255,255,255,0.5);
                border-right: 1px solid rgba(255,255,255,0.2);
                border-bottom: 1px solid rgba(255,255,255,0.2);
                font-size: 16px;
                letter-spacing: 1px;
                color: #8e7f7f;
                box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            }
            .form .inputbox input::placeholder{
                color: #cbc3c3;
            }
            .form .inputbox input[type="submit"]{
                background: #009688;
                color: white;
                max-width: 100px;
                cursor: pointer;
                margin-bottom: 20px;
                font-weight: 600;
                padding: 10px 20px;
            }
            .forget{
                margin-top: 5px;
                color: #8e7f7f;
            }
            .forget a{
                color: #fff;
                font-weight: 600;
            }
            .chk input{
                margin-top:17px;
            }
            @media(max-width: 768px){
            .container {
            position: relative;
            width: 300px;
            min-height: 400px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px);
            box-shadow: 0 25px 45px rgb(0 0 0 / 10%);
            border: 1px solid rgba(255,255,255,0.5);
            border-right: 1px solid rgba(255,255,255,0.2);
            border-bottom: 1px solid rgba(255,255,255,0.2);
            }
            .form .inputbox input {
            width: 100%;
            background: rgba(255,255,255,0.2);
            border: none;
            outline: none;
            padding: 20px 20px;
            border-radius: 35px;
            border: 1px solid rgba(255,255,255,0.5);
            border-right: 1px solid rgba(255,255,255,0.2);
            border-bottom: 1px solid rgba(255,255,255,0.2);
            font-size: 16px;
            letter-spacing: 1px;
            color: #8e7f7f;
            box-shadow: 0 5px 15px rgb(0 0 0 / 5%);
            }
            section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            height: auto;
            background: linear-gradient(to bottom,#f1f4f9,#dff1ff);
            position: relative;
            max-width: 100%;
            overflow: hidden;
            }
            }
        </style>
    </head>
    <body>
        <section>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="box">
                <div class="square" style="--i:0;"></div>
                <div class="square" style="--i:1;"></div>
                <div class="square" style="--i:2;"></div>
                <div class="square" style="--i:3;"></div>
                <div class="square" style="--i:4;"></div>
                <div class="container">
                    <div class="form">
                        <h2>Login Form</h2>
                        <form method="POST" action="login_processor.php">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <div class="inputbox">
                                <input required type="email" placeholder="Email" name="email">
                            </div>
                            <div class="inputbox">
                                <input required type="password" placeholder="Password" name="password">
                            </div>
                            <label class="chk" for="chk">
                                <label><a a href="term.php"><input onclick="EnableDisableTextbutton(this)" required type="checkbox" name="">I agree the term and policy</label></a>
                            </label>
                            <div class="inputbox">
                                <input type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>