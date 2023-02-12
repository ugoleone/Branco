<?php
/*
Template Name: NFT
*/
?>

<?php
get_header();
?>

<script>
    document.getElementById('nft').classList.add("active");
</script>

<?php get_template_part('assets/template-parts/section', 'gallery'); ?>


<div class="loadingScreen" id="loadingS">
    <div class="loaderSymbol">Loading...</div>
</div>

<script>
    //lightBoxTitle
    var elements = document.getElementsByClassName("lightBoxTitle");
    for(var i = 0; i < elements.length; i++) {
        elements[i].innerHTML = "NFT on <a href='https://midanft.com'>midanft.com</a>"
    }
</script>


<?php
get_footer();
?>