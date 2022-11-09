<div class="galleryContainer" id="galleryContainer">
    <div class="galleryCol">
        <?php
            if( have_rows('first_col') ):
                while( have_rows('first_col') ) : the_row();
                ?>
                    <div class="galleryItem" onclick="openLightBox(0)">
                        <img class="galleryImage" src="<?php the_sub_field('opera');?>" alt="<?php the_sub_field('titolo_opera');?>">
                        <span><?php the_sub_field('titolo_opera');?></span>
                    </div>
                <?php
                endwhile;
            endif;
        ?>
    </div>
    <div class="galleryCol" id="centralGallerycol">
        <?php
            if( have_rows('second_col') ):
                while( have_rows('second_col') ) : the_row();
                ?>
                    <div class="galleryItem" onclick="openLightBox(0)">
                        <img class="galleryImage" src="<?php the_sub_field('opera');?>" alt="<?php the_sub_field('titolo_opera');?>">
                        <span><?php the_sub_field('titolo_opera');?></span>
                    </div>
                <?php
                endwhile;
            endif;
        ?>
    </div>
    <div class="galleryCol">
        <?php
            if( have_rows('third_col') ):
                while( have_rows('third_col') ) : the_row();
                ?>
                    <div class="galleryItem" onclick="openLightBox(0)">
                        <img class="galleryImage" src="<?php the_sub_field('opera');?>" alt="<?php the_sub_field('titolo_opera');?>">
                        <span><?php the_sub_field('titolo_opera');?></span>
                    </div>
                <?php
                endwhile;
            endif;
        ?>
    </div>
</div>

<!-- LIGHT BOX -->
<div class="lightBox" id="lightBox" style="display: none;">
    <div class="lightBoxFirstRow">
        <div class="lightBoxCol">
            <svg onclick="closeLightBox()" class="backButton" viewBox="0 0 50 9"><path d="m0 4.5 5-3m-5 3 5 3m45-3h-77"></path></svg>
        </div>
        <div class="lightBoxCol">
            <span class="imageArrows" onclick="slidePrevious()">&#60;</span>
            <img class="galleryImage" id="lightBoxImage" src="" alt="">
            <span class="imageArrows" onclick="slideNext()">&#62;</span>
        </div>
        <div class="lightBoxCol">
            <p id="lightBoxTitle"></p>
            <p id="lightBoxTitle">Acrilico su tela</p>
        </div>
    </div>
</div>