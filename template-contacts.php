<?php
/*
Template Name: Contacts
*/
?>
<?php
get_header();

if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'en') {
    $contactName = 'Contacts';
}
else if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'pt') {
    $contactName = 'Contatos';
}
else {
    $contactName = 'Contatti';
}
?>

<script>
    document.getElementById('contacts').classList.add("active");
</script>

    <div class="contactsContainer">
        <div class="contactsTitleCol">
            <h1><?php echo __($contactName,'branco'); ?></h1>
        </div>
        <div class="contactsBodyCol">
           <h2>Management</h2>
           <a href="MAILTO:stefaniacesari.br@gmail.com">stefaniacesari.br@gmail.com</a>
           <a href="TEL:+55 11 984379847">+55 11 984379847</a>
           <span><a href="https://instagram.com/branco.arte?igshid=YmMyMTA2M2Y=">Instagram</a> | <a href="https://www.facebook.com/ArtistaBranco">Facebook</a></span>
        </div>
    </div>


<?php
get_footer();
?>