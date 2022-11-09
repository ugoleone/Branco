<?php
get_header();
?>

<script>
    document.getElementById('home').classList.add("active");
</script>

<?php get_template_part('assets/template-parts/section', 'gallery'); ?>


<div class="loadingScreen" id="loadingS">
    <div class="loaderSymbol">Loading...</div>
</div>


<?php
get_footer();
?>