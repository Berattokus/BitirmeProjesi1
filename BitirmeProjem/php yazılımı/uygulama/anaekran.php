<?php

session_start();

if(isset($_SESSION["kullanici_adi"]))
{
    echo "<h3>".$_SESSION["kullanici_adi"]." HOŞGELDİN</h3>";
    echo "<h3>".$_SESSION["email"]."</h3>";
    echo "<a href='cikis.php' style=color:'red; background-color:yellow; border:1px solid red; padding:5px 5px;'>ÇIKIŞ YAP</a>";
    
}
else
{
    echo "Bu sayfayı görünteleme yetkiniz yoktur";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İstinyeli - Medya</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .hero {
            position: relative;
            height: 100vh;
            width: 100%;
            background: #fff;
        }

        .container {
            width: 1320px;
            max-width: 95%;
            margin: 0 auto;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 45px;
        }

        .logo {
            color: #000;
            font-size: 35px;
            letter-spacing: 2px;
            cursor: pointer;
        }

        .logo span {
            color: #2373bb;
        }

        nav ul li {
            list-style: none;
            display: inline-block;
            padding: 10px 25px;
        }

        nav ul a {
            color: #000;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        nav ul li:after {
            content: '';
            display: block;
            width: 0%;
            height: 2px;
            background-color: #2373bb;
            margin: auto;
            transition-duration: .4s;
        }

        nav ul li:hover::after {
            width: 100%;
        }

        nav ul a:hover {
            color: #2373bb;
            transition-duration: .4s;
        }

        .row {
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
            justify-content: space-around;
            position: relative;
            padding-top: 90px;
        }

        .col-2 {
            flex-basis: 50%;
            min-width: 300px;
        }

        .row h1 {
            color: #000;
            font-size: 80px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .row p {
            color: #007FCC;
            line-height: 1.7;
            font-size: 17px;
            margin-bottom: 25px;
        }

        .row a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background: linear-gradient(to left bottom, #ee0979, #fc1c62, #ff364a, #ff512f, #ff6a00);
            padding: 10px 25px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 6px;
        }

        .row .btn {
            background: #afacac;
            color: #666;
            margin-left: 20px;
        }

        .row a:hover {
            transform: scale(1.1);
            transition-duration: .4s;
        }

        .col-2 .dot {
            margin-left: 50px;
        }

        .extra {
            position: absolute;
            display: flex;
            align-items: baseline;
            justify-content: space-around;
            bottom: 60px;
            right: 80px;
        }

        .extra img:nth-child(1) {
            width: 130px;
            position: absolute;
            bottom: 0;
            left: -100px;
        }

        .extra img:nth-child(2) {
            width: 460px;
        }

        .extra img:nth-child(3) {
            width: 150px;
            position: absolute;
            bottom: 0;
            right: -80px;
        }
    </style>

</head>
<body>
<section class="hero">
    <div class="container">
        <nav>
            <h2 class="logo"><span>SEB İnternat</span>ional Software</h2>

            <ul>
                <a href="anasayfa.html"><li>Anasayfa</li></a>
                <a href="hakkımızda.html"><li>Hakkımızda</li></a>
                <a href="kullanıcıyorumları.html"><li>Kullanıcı Yorumları</li></a>
                <a href="ürünler.html"><li>Ürünler</li></a>
                <a href="iletişim.html"><li>İletişim</li></a>
            </ul>
        </nav>

        <div class="row">
            <div class="col-2">
                <h1>Merhaba, Ben <br> İstinyeli</h1>
                <p>Şirketin kendisi oldukça başarılı bir şirket. O, yumuşamış olanları kabul eder, bilge adam onlardan daha fazla
                    uzak dursun, çünkü zamanlar özgürdür, egzersiz yapar, burada hakikatin görevlerine, yozlaşmışların acı
                    çekmesi meselesine hazırlanır.</p>
                <a href="">Fallow Me</a>
                <a href="" class="btn">Contact Me</a>
            </div>

            <div class="col-2">
                <img src="dotbg.png" class="dot">
                <div class="extra">
                    <img src="line1.png">
                    <img src="banner.png">
                    <img src="line2.png">
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
