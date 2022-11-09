<!DOCTYPE html>

<?php/*
    if(isset($_GET['accept-cookies'])) {
        //1 anno equivale a 31556925 secondi
        setcookie('accept-cookies', 'true', time()+31556925, "/");
        header('Location: ./');
    }*/
?>

<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FAVICONS -->
    <link rel="icon" href="<?php echo(get_template_directory_uri()."/assets/icons/favicon-33.jpg") ?>" sizes="33x33">
    <link rel="icon" href="<?php echo(get_template_directory_uri()."/assets/icons/favicon-192.jpg") ?>" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo(get_template_directory_uri()."/assets/icons/favicon-192.jpg") ?>">
    <meta name="msapplication-TileImage" content="<?php echo(get_template_directory_uri()."/assets/icons/favicon-192.jpg") ?>">

    <?php wp_head(); ?>
</head>
<body>

    <div class="topnav" id="myTopnav">
        <a href="/" class="homeButton">Branco</a>
        <div class="navContainer">
            <a href="/" class="active">Home</a>
            <a href="/contacts"><?php echo __('Contatti','branco'); ?></a>
            <a href="/about"><?php echo __('Biografia','branco'); ?></a>
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
    </div>
    