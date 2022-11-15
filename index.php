<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    html{
        font-size: 10px;
        font-family: 'Montserrat', sans-serif;
    }
    a{
        text-decoration: none;
    }
    .container{
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #hero{
        background-image: url(./gambar/restaurant1.jpg);
        background-size: cover;
        background-position: top center;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }
    #hero::after{
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75));
        opacity: .7;
        z-index: -1;
    }
    #hero .hero{
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 50px;
        justify-content: flex-start;
    }
    #hero h1{
        display: block;
        width: fit-content;
        font-size: 4rem;
        position: relative;
        color: transparent;
        animation: text_reveal .5s ease forwards;
        animation-delay: 1s;
    }
    #hero h1:nth-child(1){
        animation-delay: 1s;
    }
    #hero h1:nth-child(2){
        animation-delay: 2s;
    }
    #hero h1:nth-child(3){
        animation: text_reveal_name .5s ease forwards;
        animation-delay: 3s;
    }
    #hero h1 span{
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        background-color: #009688;
        animation: text_reveal_box 1s ease;
        animation-delay: .3s;
    }
    #hero h1:nth-child(1) span{
        animation-delay: .5s;
    }
    #hero h1:nth-child(2) span{
        animation-delay: 1.5s;
    }
    #hero h1:nth-child(3) span{
        animation-delay: 2.5s;
    }
    #hero .cta{
        display: inline-block;
        padding: 10px 30px;
        color: white;
        background-color: transparent;
        border: 2px solid #009688;
        font-size: 2rem;
        text-transform: uppercase;
        letter-spacing: .1rem;
        margin-top: 30px;
        transition: .3s ease;
        transition-property: bacground-color,color;
    }
    #hero .cta:hover{
        color: white;
        background-color: #009688;
    }

    @keyframes text_reveal_box{
        50% {
            width: 100%;
            left: 0;
            }
        100%{
            width: 0;
            left: 100%;
            }   
    }
    @keyframes text_reveal{
        100%{
            color: white;
            }
    }
    @keyframes text_reveal_name{
        100%{
            color: #009688;
            font-weight: 500;
            }
    }
    @media(max-width: 768px){
    }

</style>
    </head>
    <body>
        <section class="hero" id="hero">
            <div class="container">
                <div>
                    <h1>Hello,<span></span></h1>
                       <h1>Welcome to<span></span></h1>  
                        <h1>AIA Company<span></span></h1>
                    <a href="interface3.php" type="button" class="cta">Login Page</a>
                </div>
            </div>
        </section>
    </body>
</html>