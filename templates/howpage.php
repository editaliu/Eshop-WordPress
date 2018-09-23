<?php
/* Template Name: How Page*/

get_header(); ?>
<div class="foot"></div>
<section id="how" class="about how">
    <div class="section-heading greens">
        <?php
    echo do_shortcode(get_field('how_heading'));
  ?>
            <!-- <h2>How it works?</h2> -->
    </div>
    <!--    container of all bubbles-->
    <div class="flex-container container">
        <?php
            if(have_rows('how_how_repeater')):
                while(have_rows("how_how_repeater")): the_row();
        ?>
            <div class="one-icon">
                <div class="bublle">
                    <?php
                      $image = get_sub_field('image', 'option');
                      if(!empty($image)): 
                    ?>
                        <!--                           img of bubble-->
                        <img src="<?php echo $image['sizes']['how-image']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php
                      endif;
                  ?>
                </div>
                <!--                           description of bubble-->
                <p style="text-align: center; color:black">
                    <?php the_sub_field('heading'); ?>
                </p>
            </div>
                <?php
                endwhile;
            endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
