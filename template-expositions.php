<?php
/*
Template Name: Expos
*/
?>
<?php
get_header();
?>

<script>
    document.getElementById('expos').classList.add("active");
</script>

    <div class="aboutContainer">
        <div class="aboutTitleCol">
            <img src="<?php the_field('first_about_image'); ?>" alt="" srcset="">
        </div>
        <div class="aboutBodyCol">
            <p><?php the_field('first_about_text'); ?></p>
        </div>
    </div>

    <div class="aboutContainer">
        <div class="aboutTitleCol">
            <img src="<?php the_field('second_about_image'); ?>" alt="" srcset="">
        </div>
    </div>


   

    <div class="Spacer"></div>


<?php
get_footer();
?>