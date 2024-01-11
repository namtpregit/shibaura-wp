<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shibaura
 */

?>
    <!-- Footer -->
    <footer id="footer"  data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
        <div class="container-c">
            <div class="box">
                <div class="left">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/logo.png" alt="" class="img">
                    </a>
                </div>
                <div class="right">
                    <?php
                    wp_nav_menu(array('theme_location' => 'my-custom-menu', 'container' => 'ul', 'menu_class' => 'nav'));
                    ?>
                    <div class="info">
                        <p>〒104-0061　東京都中央区銀座3-5-9</p>
                        <p>TEL：03-6433-1277</p>
                        <p>mail：zaidan@shibaura-group.co.jp</p>
                    </div>
                    <p class="copy-right">©一般財団法人　芝浦文化財団</span>
                </div>
            </div>
        </div>
    </footer>

<!-- End wrapper -->
</div>

<script src="<?php bloginfo('template_directory'); ?>/shibaura-html/libs/jquery-3.5.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/shibaura-html/libs/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/shibaura-html/libs/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/shibaura-html/js/main.js"></script>
<script>
    AOS.init();

    $(document).ready(function() {
        $('.owl-banner').owlCarousel({
            loop: true,
            margin: 10,
            items: 1,
            // animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            autoplay:true,
            autoplayTimeout:3000,
        })
    })
</script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>