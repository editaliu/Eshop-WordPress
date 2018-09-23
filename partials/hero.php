<section class="hero" style="background-image: url(<?php echo get_field('hb_background')['sizes']['slider-image']; ?>);">
    <div class="container">
        <div class="section-heading">
            <?php
            echo do_shortcode(get_field('hb_heading'));
            ?>
        </div>
        <?php
        // 3 buttons
          // if(have_rows('hb_button')):
          //   while(have_rows('hb_button')): the_row();
          //       $link = get_sub_field('link');
        //                                            dump($link);
          $link = get_field('hb_button');
            if($link['target']=="_blank"){
                $link['target']='target="_blank"';
            }else{
                $link['target']='';
            }
        ?>
<!--           button shop now-->
            <a class="shop-button" href="<?php echo $link['url'] ?>" <?php echo $link[ 'target'] ?>>
                <?php echo $link['title'] ?>
            </a>
    </div>
</section>
