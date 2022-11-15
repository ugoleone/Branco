<?php
/*
Template Name: Expos
*/
?>
<?php
get_header();

if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'en') {
    $lang = 'en';
}
else if(isset($_COOKIE['lang']) and $_COOKIE['lang'] == 'pt') {
    $lang = 'pt';
}
else {
    $lang = 'it';
}

?>

<script>
    document.getElementById('expos').classList.add("active");
</script>

    <div class="aboutContainer">
        <div class="aboutTitleCol">
            <img src="<?php the_field('first_about_image'); ?>" alt="" srcset="">
        </div>
        <div class="aboutBodyCol">
            <p><?php if($lang == 'en') {the_field('first_about_text_en');} else if($lang == 'pt') {the_field('first_about_text_pt');} else {the_field('first_about_text');} ?></p>
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