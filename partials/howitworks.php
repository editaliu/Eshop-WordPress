<section id="how" class="how" style="background-image: url(<?php echo get_field('hh_background')['sizes']['slider-image']; ?>);">
    <div class="section-heading light">
        <?php
        echo do_shortcode(get_field('hh_heading'));
        ?>
            <!-- <h2>How it works?</h2> -->
    </div>
    <!--    container of all bubble pictures-->
    <div class="container flex-container">
        <?php
            if(have_rows('hh_how_repeater')):
                while(have_rows("hh_how_repeater")): the_row();
        ?>
            <div class="one-icon">
                <!--               bubble picture "how"-->
                <div class="bublle">
                    <?php
                      $image = get_sub_field('image', 'option');
                      if(!empty($image)): 
                    ?>
                    <img src="<?php echo $image['sizes']['how-image']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php
                       endif;
                    ?>
                </div>
                <!--                description of picture-->
                <p style="text-align: center">
                    <?php the_sub_field('heading'); ?>
                </p>
            </div>
            <?php
                endwhile;
            endif;
        ?>
    </div>
</section>
