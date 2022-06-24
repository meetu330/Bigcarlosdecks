<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package health-care
 */
?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <?php /* 	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'health-care' ) ); ?>">
          <?php

          printf( esc_html__( 'Proudly powered by %s', 'health-care' ), 'WordPress' );
          ?>
          </a>
          <span class="sep"> | </span>
          <?php

          printf( esc_html__( 'Theme: %1$s by %2$s.', 'health-care' ), 'health-care', '<a href="http://underscores.me/">Underscores.me</a>' );
          ?> */ ?>
       <?php /* <div class="container d-flex justify-content-sb">
            <div class="footer-block">
                

                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="footer-right justify-content-sb d-flex">
                <div class="footer-links">
                    <?php
                    wp_nav_menu(
                            array(
                                'menu_id' => 'Links',
                            )
                    );
                    ?>
                </div>
                <div class="footer-links">
                    <?php
                    wp_nav_menu(
                            array(
                                'menu_id' => 'Other Links',
                            )
                    );
                    ?>

                </div>
                <div class="footer-links">
                    <ul>
                        <li><a href="http://www.worldofhomeopathy.com/privacy-policy/">Privacy</a></li>
                        <li><a href="#">Term</a></li>
                    </ul> 

                </div>
            </div>
        </div> */?>
    </div><!-- .site-info -->
    <div class="bottom-footer">
        <div class="container d-flex justify-content-sb">
           <div class="footer-logo">
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""></a>
                </div>
            <p>Copyright 2021 by <a href="#">Bigcarlosdecks</a>. All Right Reserved.</p>

        </div>    
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
