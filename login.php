<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css_login/stylelogin.css"> 
    
   
    
    <!-- css cooding/ kalau nk design kene kat sini jee
    sebelum start css makesure class dah buat -->
    <style> 
    body{ 
        margin:0;
        padding:0;
        font-family: monospace;
        /*background:linear-gradient(120deg,#2980b9, #8e44ad);*/
        height:100vh;
        overflow: hidden;
        background-image : url("/capthor/gambar/coffee.jpg");
    }
    /*.back{
    text-align:center;
    margin-left: 42%; 
    }
    .registeration{
    text-align:center;
    margin-left: 1%; 
    }*/
    .container{
        position: absolute;/*form tak berterabur*/
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);/*tengah website*/
        width: 500px;
        background-color: rgb(0,0,0,0.6);
        border-radius: 10px;

    
    }
    .container form{
        padding: 0 50px;/*jarak antara kiri dan kanan*/
        box-sizing: border-box;
    }
    form .txt_field{/*line kelabu*/
        position: relative;/*perkatan yg ada dlm box*/
        border-bottom: 2px solid #adadad;/*line username n pass*/
        margin: 30px -10px;/*30 tu jarak atas bawah,0 panjang line*/
    }
    .txt_field input{
        width: 100%;/*panjang kotak form*/
        padding: 0 5px;/*0 jarak kotak atas bwh,5 panjang pendek*/
        height: 40px;/*ketinggian kotak*/
        font-size: 16px;/*size font yg diisi*/
        border: none;
        background-color: rgb(0,0,0,0.1);
        outline: none;
        color: white;
    }
    .txt_field label{/*username n pass bergerak ke atas*/
        position: absolute;
        top: 40%;/*jarak username n pass antara line*/
        left: 40px;/*arahkan perkataan ke dalam form*/
        color: #adadad;
        transform: translate(-30%);/*arahkan username n pass ke dalam kotak form*/
        font-size: 16px;/*siza username n pass*/
        pointer-events: none;
        transition: .5s;
    }
    .txt_field span::before{
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #2691d9;
        transition: .5s;
    }
    .txt_field input:focus ~ label,
    .txt_field input:valid ~ label{
        top: -10px;
        color: #2691d9;
    }
    .txt_field input:focus ~ span::before,
    .txt_field input:valid ~ span::before{
        width: 100%;
    }
    .container .title{
        text-align: center;
        padding: 10 0 20px 0;
        border-bottom: 5px solid #8e44ad;
    }
    .term{
        margin: -5px 0 20px 5px;
        cursor: pointer;
    }
    .term:hover{
        text-decoration: underline;
    }
    button{
        width: 100%;
        height: 50px;
        border: 2px solid;
        background:linear-gradient(120deg,#2980b9, #8e44ad);
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 500;
        cursor: pointer;
        outline: none;
   }
   button:hover{
    border-color: #2691d9;
    transition: .5s;
   }
   .term input{
    margin-left: 60px;
   }
   .term input{
    cursor: pointer;
   }
   .title h1{
    color: #adadad;
   }
    </style> 

</head>
<body>
    <div class="container"> 
    <div class="title">
        <h1>Sign in</h1></div>  
        <form method="POST" action="login_processor.php">
        <div class="txt_field">
            <input required type="email" name="email">
            <span></span>
            <label id="email">Email</label>
        </div>
        <div class="txt_field">
            <input required type="password" name="password">
            <span></span>
            <label id="password">Password</label>
            <a href="term.php">
        </div>
        <div class="term">
            <label for="chk">
            <input onclick="EnableDisableTextbutton(this)" id='checkbox' type="checkbox"> I AGREE TO THE TERMS AND POLICY </a><br> <br>
            </label>
        </div>
        <button disabled="disabled" id="btnConnect" type="submit" name="btnConnect" >Connect</button></a> <br> <br></b> 
</div>
</form>

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

    <!--BUTTON BACK AND REGISTER-->
    <!--<a href="index.php">
        <button class="back" type="button" name="back">Back</button></a>
    <a href="register.php">
        <button class="registeration" type="button" name="register">Registeration</button>
    </a>-->
    
</body>
</html>