<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?=$titulo?></title>

    <link rel="icon" type="image/png" sizes="1080x1080" href="<?=$base?>/assets/img/logo.png">

    <link rel="stylesheet" href="<?=$base;?>/assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata">
    <link rel="stylesheet" href="<?=$base?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=$base?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=$base?>/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <script src="https://unpkg.com/imask@6.4.2/dist/imask.js"></script>
    <link rel="stylesheet" href="<?=$base?>/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="<?=$base?>/assets/css/site1.css">
<meta itemprop="keywords" content="centro dia para idosos, senior day penha, penha, centro para idosos, meia idade, asilo, creche para idosos, atividades para idosos, casa de repouso, geriatria, idosos, terceira idade, casa de repouso paraiso tropical">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-194125581-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-194125581-1');
</script>
</head>
<body>
    <header class="justify-content-between" style="height: <?php if($menu == 'Home'){ echo '95vh;';} else {echo '40vh;';}?>;background: url(&quot;<?=$base?>/assets/img/<?php if($menu == 'Home'){ echo 'fundo%20bom2.jpg&quot;';} else {echo 'fundowhite.jpg&quot;';}?>) <?php if($menu == 'Home'){ echo 'top';} else {echo 'center';}?> / cover space;border-bottom: 2px solid rgb(0,203,249);">
        <div class="d-flex flex-column justify-content-between" style="height: 95vh;">
            <div>
                <div class="d-flex d-xxl-flex justify-content-end justify-content-xxl-end" style="margin: auto;background: rgb(255,255,255);padding-right: 5px; font-size:20px;">
                    <h6 style="color: #00bef5;margin: 0; font-size:20px;"><strong>R. Marciano Luiz Bento, 242 - Gravatá, Penha - SC</strong> (47) 99661-7642</h6><a href="https://www.instagram.com/casaderepousoparaisotropical/" style="margin-right: 5px;margin-left: 5px;" target="_blank"><i class="fa fa-instagram" data-bss-hover-animate="pulse" style="font-size: 20px;color: #00bef5;"></i></a><a href="https://www.facebook.com/casaderepousoparaisotropical" style="margin-right: 5px;margin-left: 5px;" target="_blank"><i class="fa fa-facebook-square" data-bss-hover-animate="pulse" style="font-size: 20px;color: #00bef5;"></i></a><a href="https://wa.me/555547996617642" style="margin-right: 5px;margin-left: 5px;" target="_blank"><i class="fa fa-whatsapp" data-bss-hover-animate="pulse" style="font-size: 20px;color: #00bef5;"></i></a>
                </div>
                <nav class="navbar navbar-light navbar-expand-md" style="max-width: 1120px;margin: auto;font-family: Alata, sans-serif;">
                    <div class="container-fluid"><a class="navbar-brand" href="<?=$base?>"><img data-bss-hover-animate="pulse" src="<?=$base?>/assets/img/logo.png" width="110px"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="border-width: 0px;border-bottom-width: 0px;"><i class="fa fa-navicon" style="color: rgb(0,190,245);font-size: 25px;"></i></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link active nav-item" href="<?=$base?>" style="<?php if($menu == 'Home'){ echo 'color: rgb(0,190,245);';} else {echo 'color: #02829f;';}?>">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link nav-item" href="<?=$base?>/quem-somos" style="<?php if($menu == 'Sobre'){ echo 'color: rgb(0,190,245);';} else {echo 'color: #02829f;';}?>">Quem somos</a></li>
                                <li class="nav-item"><a class="nav-link nav-item" href="<?=$base?>/contato" style="<?php if($menu == 'Contato'){ echo 'color: rgb(0,190,245);';} else {echo 'color: #02829f;';}?>">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" data-bss-parallax-bg="true"></div>
        </div>
    </header>