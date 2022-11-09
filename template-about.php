<?php
/*
Template Name: About
*/
?>
<?php
get_header();
?>


    <div class="aboutContainer">
        <div class="aboutTitleCol">
            <h1>Jadielson Dos Santos Lima</h1>
            <h2>Branco, nato 1987 nella città alagoana di Penedo</h2>
        </div>
        <div class="aboutBodyCol">
            <p><?php the_field('intro_about_text'); ?></p>
        </div>
    </div>

    <div class="aboutContainer">
        <div class="aboutBodyCol">
            <p><?php the_field('first_about_text'); ?></p>
        </div>
        <div class="aboutTitleCol">
            <img src="<?php the_field('first_about_image'); ?>" alt="" srcset="">
        </div>
    </div>

    <div class="aboutContainer">
        <div class="aboutTitleCol">
            <img src="<?php the_field('second_about_image'); ?>" alt="" srcset="">
        </div>
        <div class="aboutBodyCol">
            <p><?php the_field('second_about_text'); ?></p>
        </div>
    </div>

    <div class="aboutContainer">
        <div class="aboutBodyCol">
            <p><?php the_field('third_about_text'); ?></p>
            <br/>
            <p style="text-align: right">Autore del commento</p>
        </div>
        <div class="aboutTitleCol">
            <img src="<?php the_field('third_about_image'); ?>" alt="" srcset="">
        </div>
    </div>

   

    <div class="Spacer"></div>


<?php
get_footer();
?>