<footer class="foot">
    <div class="lines-container">
        <div class="container social">
            <ul class="social-icons">
                <?php
                   if(have_rows('fo_social_menu_repeater', 'option')):
                        while(have_rows('fo_social_menu_repeater', 'option')): the_row();
                        $link = get_sub_field('link');
                        if($link['target']=="_blank"){
                            $link['target']='target="_blank"';
                        }else{
                            $link['target']='';
                            }
                ?>
                    <li>
                        <a href="<?php echo $link['url'] ?>" <?php echo $link[ 'target']; ?>>
               <i> <?php echo nl2br(get_sub_field('icon')); ?></i>
               </a></li>
                    <?php
                        endwhile;
                    endif;
                ?>
                        <!-- <li><a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" title="Instagram" class="social-icon"> <i class="socicon-instagram"></i></a></li>
                <li><a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" title="Facebook" class="social-icon"> <i class="socicon-facebook"></i></a></li>
                <li><a href="https://www.skype.com/en/" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" title="Skype" class="social-icon"> <i class="socicon-skype"></i></a></li>
                <li><a href="https://twitter.com/?lang=en" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" title="Twitter" class="social-icon"> <i class="socicon-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" title="Youtube" class="social-icon"> <i class="socicon-youtube"></i></a></li>
                <li><a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" data-tooltip="tooltip" title="Linkedin" class="social-icon"> <i class="socicon-linkedin"></i></a></li> -->
            </ul>
        </div>
        <div class="container">
            <p class="copyright">
                <script>
                    document.write(new Date().getFullYear());

                </script>&copy; <br> Made with <i class="far fa-heart"></i> by
                <a class="edith" target="_blank" rel="noopener noreferrer" href="https://codepen.io/editaliu/pens/public/">Edith</a></p>
        </div>
    </div>
</footer>
<!--    FOOTER END-->
<?php
wp_footer();
?>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="greendress.js"></script> -->
</body>

</html>
