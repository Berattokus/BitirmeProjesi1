
<?php

include("baglanti.php");

if(isset($_POST["giris"]))
{

    $name=$_POST["kullaniciadi"];
    $password=$_POST["parola"];

    $ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$name','$email',
    '$password')";
    $calistirekle = mysqli_query($baglanti,$ekle);

    if(isset($name)&& isset($password))
    {
        $secim= "SELECT ** FROM kullanicilar WHERE kullanici_adi = '$name'";
        $calistir =  mysqli_query($baglanti,$secim);

        $kayitsayisi = mysqli_num_rows($calistir);

        if($kayitsayisi>0)
        {
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $hashlisifre=$ilgilikayit["parola"];

            if(password_verify($parola,$hashlisifre))
            {
                session_start();
                $_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
                $_SESSION["email"]=$ilgilikayit["email"];
                header("location:anaekran.php");
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">
                   Parola Yanlış
                </div>';
            }
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">
                   Kullanıcı adı yanlış.
                </div>';
        }

        mysqli_close($baglanti);
    }

}






?>





<!doctype html>
<html>
    <head>
        <title>Kullanıcı Kayıt Formu</title>
        <meta charset="utf-8" />
        <style type="text/css">
            body{
                background:#000;
                font-size:10px;
                font-family:Trebuchet MS;
            }
            #kayitFormu{
                
                border-radius:10px;
                background:#ffffff;
                width:360px;
                margin:auto;
                margin-top:20px;
                padding:15px;
                text-align:center;
            }
            input, button
            {
                border-radius:5px;
                border:none;
                width:300px;
                height:50px;
                margin:20px 0px 20px 0px;
                background:rgba(240,240,240,.5);
                padding-left:15px;
                font-style:italic;
                
            }
            
            .btn{
                background:#ff1493;
                color:white;
            }
            h3{
                color:#000000;
                text-transform:uppercase;
                font-size:20px;
            }
            p {
            text-align: right;
            margin-top: 20px; /* Adjust the margin-top as needed */
            font-size: 12px;
        }
        label {
            color:  #000000;
            display: block;
            font-size: 14px;
            height: 16px;
            margin-top: 20px;
            margin-bottom: 5px;
        }
            
        </style>
    </head>
    <body>
        <div id="kayitFormu">
            <div class="card p-5">
                
                <form action="login.php" method="POST">
                    <h3>Kayıt</h3>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"><a>Kullanıcı Adı</a></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="kullaniciadi">
                        </div>



                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><a>Şifre</a></label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="parola">
                        </div>



                        <button type="submit" name="giris" class="btn btn-primary" >Giriş Yap  </button>

                        <p>Hesabınız Zaten Varmı? <a href="login.php">Giriş Yapın.</a></p>
                </form>
            </div>
        </div>
    
    </body>
</html>