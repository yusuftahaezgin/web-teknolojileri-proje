<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Web Teknolojileri Proje</title>

    <link rel="stylesheet" href="stiller.css">

</head>
<body>
<nav class="navbar bg-primary navbar-dark navbar-expand-sm my-3">
        <div class="container-fluid">   
            <a href="#" class="navbar-brand">Giriş Yap</a> 
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="login.html" class="nav-link">Giriş Yap</a>
                </li>
                <li class="nav-item">
                    <a href="hakkında.html" class="nav-link">Hakkında</a>
                </li>
                <li class="nav-item">
                    <a href="ozgecmis.html" class="nav-link">Özgeçmiş</a>
                </li>
                <li class="nav-item">
                    <a href="sehrim.html" class="nav-link">Şehrim</a>
                </li>
               
               
            </ul>
            <ul class="navbar-nav "> 
                <li class="nav-item">
                    <a href="mirasımız.html" class="nav-link">Mirasımız</a>
                </li>
                <li class="nav-item">
                    <a href="ilgi-alanlarim.html" class="nav-link">İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">İletişim</a>
                </li>
            </ul>
        </div>
    </nav>

<?php
        
        $eposta = "g221210008@sakarya.edu.tr";
        $sifre= "G221210008";

        $girilenEposta = $_POST["eposta"];
        $girilenSifre = $_POST["sifre"];

        
        if ($eposta===$girilenEposta && $sifre===$girilenSifre){
            echo "Hoşgeldiniz G221210008";
        }
        else {
            header('Location: login.html');
        }

        
        

        ?>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


