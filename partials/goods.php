<section id="goods" class="goods">
    <div class="section-heading greens">
        <?php
        echo do_shortcode(get_field('hg_heading'));
        ?>
            <!-- <h2>Our Goods</h2> -->
    </div>
    <!--    container of all things-->
    <div class="container flex-container">
        <?php
         if(have_rows('hg_goods_repeater')):
            while(have_rows('hg_goods_repeater')): the_row();
            $link = get_sub_field('link');
           // var_dump($link);
              if($link['target']=="_blank"){
                  $link['target']='target="_blank"';
              }else{
                  $link['target']='';
                  }
        ?>
            <!--           container of thing-->
            <div class="things" id="#">
                <div class="pav-fonas">
                    <a class="a-goods" href="<?php echo $link['url']; ?>" <?php echo $link[ 'target']; ?> >
                        <?php
                           $image = get_sub_field('image', 'option');
                           if(!empty($image)): 
                        ?>
<!--                    picture of thing -->
                        <img src="<?php echo $image['sizes']['dress-image']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php
                            endif;
                        ?>
<!--                           heading of thing -->
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
</section>
