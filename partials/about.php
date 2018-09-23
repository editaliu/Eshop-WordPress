<section id="about" class="about">
    <div class="section-heading greens">
        <?php echo do_shortcode(get_field('ha_heading')); 
        ?>
    </div>
    <div class="container lines-container">
        <!--       text about-->
        <?php echo do_shortcode(get_field('ha_text'));
        ?>
        <!--        headphones icon-->
        <p>
            <?php the_field('ha_listen_icon'); 
            ?>
        </p>
        <!--        what we are listening to-->
        <p style="text-align: center">
            <?php the_field('ha_text2'); 
            ?>
        </p>
        <!--        youtube link-->
        <object width="420" height="315" data="<?php the_field('ha_youtube_link'); ?>"></object>
    </div>
</section>
