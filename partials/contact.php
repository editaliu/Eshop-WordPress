<section id="contact" class="contact">
    <div class="transp">
        <div class="section-heading light">
            <?php echo do_shortcode(get_field('hc_heading'));?>
            <!-- <h2>Feel free to let us know you better!</h2> -->
        </div>
        <div class="container flex-container all-forms">
            <!--           contacts info-->
            <div class="contact-info">
                <?php echo do_shortcode(get_field('hc_contacts')); ?>
            </div>
            <!--            form to fill-->
            <form class="forma" name="say_something" action="#" method="POST" enctype="application/x-www-form-urlencoded">
                <?php echo do_shortcode(get_field('hc_form_contact')); ?>
            </form>
        </div>
    </div>
</section>
