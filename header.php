<!DOCTYPE html>


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
            <a href="/contacts" id="contacts"><?php echo __('Contatti','branco'); ?></a>
            <a href="/about" id="about"><?php echo __('Biografia','branco'); ?></a>
            <a href="/expos" id="expos"><?php echo __('Mostre','branco'); ?></a>
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
        <a href="/contacts"><?php echo __('Contatti','branco'); ?></a>
        <a href="/about"><?php echo __('Biografia','branco'); ?></a>
        <a href="/expos"><?php echo __('Mostre','branco'); ?></a>
    </div>
    