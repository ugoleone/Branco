<!DOCTYPE html>

<?php
    if(isset($_GET['accept-cookies'])) {
        //1 anno equivale a 31556925 secondi
        setcookie('accept-cookies', 'true', time()+31556925, "/");
        header('Location: ./');
    }


    
    if (isset($_GET['lang']) and trim($_GET["lang"]) == 'it') {
        setcookie('lang', 'it', time()+31556925, "/");
        header('Location: ./');
    }
    else if (isset($_GET['lang']) and trim($_GET["lang"]) == 'en') {
        setcookie('lang', 'en', time()+31556925, "/");
        header('Location: ./');
    }
    else if (isset($_GET['lang']) and trim($_GET["lang"]) == 'pt') {
        setcookie('lang', 'pt', time()+31556925, "/");
        header('Location: ./');
    }

    
    if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'en') {
        $lang = "en";
    }
    else if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'pt') {
        $lang = "pt";
    }
    else {
        $lang = "it";
    }

    if ($lang == "en") {
        $aboutName = 'About';
        $contactName = 'Contacts';
        $mostreName = 'Expositions';
    }
    else if ($lang == "pt") {
        $aboutName = 'Biografia';
        $contactName = 'Contatos';
        $mostreName = 'Exibições';
    }
    else {
        $aboutName = 'Biografia';
        $contactName = 'Contatti';
        $mostreName = 'Mostre';
    }
?>


<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FAVICONS -->
    <link rel="icon" href="<?php echo(get_template_directory_uri()."/assets/icons/favicon-33.png") ?>" sizes="33x33">
    <link rel="icon" href="<?php echo(get_template_directory_uri()."/assets/icons/favicon-192.png") ?>" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo(get_template_directory_uri()."/assets/icons/favicon-192.png") ?>">
    <meta name="msapplication-TileImage" content="<?php echo(get_template_directory_uri()."/assets/icons/favicon-192.png") ?>">

    <!-- Social sharing -->
    <meta name="description" content="Branco, nato 1987 nella città alagoana di Penedo"/> <!-- 150 chars -->
    <meta property="og:title" content="Branco"/>
    <meta property="og:description" content="Branco non aveva mai avuto fino a quel momento nessun tipo di esperienza creativa. In questo senso, continua ad essere un talento allo stato grezzo, vive e crea i sui quadri artisticamente isolato da ciò che accade nel mondo dell’arte."/> <!-- 300 chars -->
    <meta property="og:site_name" content="Branco - Jadielson Dos Santos Lima"/>
    <meta property="og:locale" content="it_IT"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://brancoart.com"/>
    <meta property="og:image:secure_url" itemprop="image" content="<?php echo(get_template_directory_uri()."/assets/icons/favicon-192.png") ?>"/>
    
    <?php wp_head(); ?>
</head>
<body>

    <div class="topnav" id="myTopnav">
        <a href="/" class="homeButton">Branco</a>
        <div class="navContainer">
            <a href="/" id="home">Home</a>
            <a href="/contacts" id="contacts"><?php echo __($contactName,'branco'); ?></a>
            <a href="/about" id="about"><?php echo __($aboutName,'branco'); ?></a>
            <a href="/nft" id="nft">NFTs</a>
            <a href="/expos" id="expos"><?php echo __($mostreName,'branco'); ?></a>
            <a href="?lang=it" id="expos" style="padding-right: 0px;">IT&#9;/</a>
            <a href="?lang=en" id="expos" style="padding-right: 0px;padding-left: 6px;">EN&#9;/</a>
            <a href="?lang=pt" id="expos" style="padding-left: 6px;">&#9;PT</a>
            <a href="javascript:void(0);" class="icon" id="openMenuB" onclick="openMenu()">
            <i class="fa fa-bars"></i>
            </a>
            <a href="javascript:void(0);" class="icon" id="closeMenuB" onclick="closeMenu()">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <div class="mobileMenu" id="mobileMenu">
        <a href="/" class="active">Home</a>
        <a href="/contacts"><?php echo __($contactName,'branco'); ?></a>
        <a href="/about"><?php echo __($aboutName,'branco'); ?></a>
        <a href="/nft" id="nft">NFTs</a>
        <a href="/expos"><?php echo __($mostreName,'branco'); ?></a>
        <a href="?lang=it" style="margin-top: 10px">IT</a>
        <a href="?lang=en" style="padding-top: 0px">EN</a>
        <a href="?lang=pt" style="padding-top: 0px">PT</a>
    </div>
    