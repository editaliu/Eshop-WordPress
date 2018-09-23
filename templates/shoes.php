<?php
/* Template Name: Shoes*/

get_header(); ?>

<!--   green line-->
<div class="foot"></div>
<section id="goods" class="goods">
    <div class="section-heading greens">
        <?php
        echo do_shortcode(get_field('s_heading'));
        ?>
            <!-- <h2>Our Goods</h2> -->
    </div>
    <?php
        if(have_rows('s_container_repeater')):
            while(have_rows('s_container_repeater')): the_row();
     ?>
                      <!--     container of all 4-->
    <div class="container flex-container">
        <?php
            if(have_rows('s_goods_repeater')):
                while(have_rows('s_goods_repeater')): the_row();
                $link = get_sub_field('link');
                // var_dump($link);
            if($link['target']=="_blank"){
              $link['target']='target="_blank"';
            }else{
              $link['target']='';
              }
        ?>
                               <!--           container of each-->

            <div class="things" id="#">
                <div class="pav-fonas">
                    <a class="a-goods" href="<?php echo $link['url']; ?>" <?php echo $link[ 'target']; ?> >
                        <?php
                           $image = get_sub_field('image', 'option');
                           if(!empty($image)): 
                        ?>
                           <!--                           img of thing-->
                            <img src="<?php echo $image['sizes']['dress-image']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php
                            endif;
                        ?>
                            <!--                           description or price of thing-->
                            <h3 style="text-align: center">
                            <?php the_sub_field('heading'); ?>
                            </h3>
                    </a>
                </div>
            </div>
            <?php
                endwhile;
            endif;
          ?>
    </div>
    <?php
        endwhile;
    endif;
  ?>
</section>

<?php get_footer(); ?>
