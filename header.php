<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo(" charset "); ?>">
    <title>
        <?php wp_title(); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
//        prijungia visus aprasytus failus is functions.php
      wp_head();
    ?>
</head>

<body>

    <header class="title">
        <div class="container flex-container">

            <!--        LOGO START-->
            <div class="logo-div nav-brand">
                <a href="<?php echo home_url(); ?>">
                    <!-- <h1 itemprop="name">Green Dress</h1>
                    <img alt="Black Dress In Green Background" src="https://static.thenounproject.com/png/22893-200.png"> -->

                    <?php
                    if(get_field('ho_logo_type', 'option')):
                       the_field('ho_logo_text', 'option');
                     else:
                         $image = get_field('ho_logo_image', 'option');
                         if(!empty($image)): ?>
                            <img src="<?php echo $image['sizes']['logo-image']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php
                         endif;
                     endif;
                     ?>
                </a>
            </div>

            <nav class="nav-bar">
                <?php
                   $args = [
                       "menu_class" => "top-nav flex-container ",
                       "container" => false,
                       "theme_location" => 'primary-navigation'
                   ];
                    wp_nav_menu($args);
                ?>
                    <!-- <ul class="top-nav flex-container" id="top-nav-id"> -->
                    <!--                    DRPDOWN MENU-->
                    <!-- <li class="nav-link"><a href="#">Shop</a>
                        <ul class="dropdown-content">
                            <li class="shop-link"><a href="#dresses">Dresses</a></li>
                            <li class="shop-link"><a href="#other">Other</a></li>
                            <li class="shop-link"><a href="#shoes">Shoes</a></li>
                            <li class="shop-link"><a href="#accessories">Accessories</a></li>
                        </ul>
                    </li>
                    <li class="nav-link"><a href="#about">About</a></li>
                    <li class="nav-link"><a href="#">Home</a></li>
                    <li class="nav-link"><a href="#how">How?</a></li>
                    <li class="nav-link"><a href="#contact">Contact</a></li>

                </ul> -->
                    <!--            MENIU END-->
            </nav>
            <!--            BURGER-->
            <div class="icon">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
