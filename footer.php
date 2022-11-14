<?php

if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'en') {
    $contattiText = 'Contacts';
    $cookieText = 'This website only uses technical cookies.';
}
else if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'pt') {
    $contattiText = 'Contatos';
    $cookieText = 'Este site usa apenas cookies técnicos.';
}
else {
    $contattiText = 'Contatti';
    $cookieText = 'Questo sito web fa uso solo di cookies tecnici.';
}

?>

<div class="footerContainer">
    <div class="footer" id="footer">
        <a href="https://www.facebook.com/ArtistaBranco">Facebook</a>
        <a href="https://instagram.com/branco.arte?igshid=YmMyMTA2M2Y=">Instagram</a>
        <a href="/contacts"><?php echo($contattiText) ?></a>
        <a href="https://ugoleonecavalcanti.com">Credits</a>
    </div>
</div>


<?php
    if(!isset($_COOKIE['accept-cookies'])) {
?>

<div class="cookieBanner">
    <p><?php echo __($cookieText,'branco'); ?></p>
    <!--<a href="/privacy" tabindex="2" style="text-decoration: underline;">Privacy policy</a>-->
    <a href="?accept-cookies" style="float: right; text-decoration: underline;" tabindex="1">Ok</a>
</div>

<?php
    }
?>

<?php wp_footer(); ?>

    </body>
</html>