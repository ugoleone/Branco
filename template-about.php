<?php
/*
Template Name: About
*/
?>
<?php
get_header();

if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'en') {
    $lang = 'en';
    $brancoText = 'Branco was born in 1987 in the Alagoan city of Penedo';
}
else if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'pt') {
    $lang = 'pt';
    $brancoText = 'Branco nasceu em 1987 na cidade alagoana de Penedo';
}
else {
    $lang = 'it';
    $brancoText = 'Branco, nato 1987 nella città alagoana di Penedo';
}
?>

<script>
    document.getElementById('about').classList.add("active");
</script>


    <div class="aboutContainer">
        <div class="aboutTitleCol">
            <h1>Jadielson Dos Santos Lima</h1>
            <h2><?php echo __($brancoText,'branco'); ?></h2>
        </div>
        <div class="aboutBodyCol">
            <p><?php if($lang == 'en') {the_field('intro_about_text_en');} else if($lang == 'pt') {the_field('intro_about_text_pt');} else {the_field('intro_about_text');} ?></p>
        </div>
    </div>

    <div class="aboutContainer">
        <div class="aboutBodyCol">
            <p><?php if($lang == 'en') {the_field('first_about_text_en');} else if($lang == 'pt') {the_field('first_about_text_pt');} else {the_field('first_about_text');} ?></p>
        </div>
        <div class="aboutTitleCol">
            <img src="<?php the_field('first_about_image'); ?>" alt="" srcset="">
        </div>
    </div>

    <div class="aboutContainer mobileInvert">
        <div class="aboutTitleCol">
            <img src="<?php the_field('second_about_image'); ?>" alt="" srcset="">
        </div>
        <div class="aboutBodyCol">
            <p><?php if($lang == 'en') {the_field('second_about_text_en');} else if($lang == 'pt') {the_field('second_about_text_pt');} else {the_field('second_about_text');} ?></p>
        </div>
    </div>

    <div class="aboutContainer">
        <div class="aboutBodyCol">
            <p><?php if($lang == 'en') {the_field('third_about_text_en');} else if($lang == 'pt') {the_field('third_about_text_pt');} else {the_field('third_about_text');} ?></p>
            <br/>
            <p style="text-align: right">Olivio Tavares de Araujo</p>
        </div>
        <div class="aboutTitleCol">
            <img src="<?php the_field('third_about_image'); ?>" alt="" srcset="">
        </div>
    </div>

   

    <div class="Spacer"></div>


<?php
get_footer();
?>