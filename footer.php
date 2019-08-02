<!-- Footer
    ============================================= -->
<footer id="footer" class="dark">

    <!-- Copyrights
============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                <?php echo get_theme_mod( 'pu_footer_copyright_text' ); ?><br>

                <?php
                if (get_theme_mod( 'pu_report_file' ) ) {
                    ?>
                    <a href="<?php echo get_theme_mod('pu_report_file');?>"> <?php echo __( 'Download Report', 'udemy');?> </a><br>
                    <?php
                }
                ?>

                <div class="copyright-links">
                    <a href="<?php get_theme_mod( 'pu_footer_tos_page' ) ? the_permalink( get_theme_mod( 'pu_footer_tos_page' ) ) : "#"; ?>"> 
                        <?php echo __( 'Terms of Service', 'udemy');?>
                    </a>
                    <a href="<?php get_theme_mod( 'pu_footer_privacy_page' ) ? the_permalink( get_theme_mod( 'pu_footer_privacy_page' ) ) : "#"; ?>">
                        <?php echo __( 'Privacy Policy', 'udemy');?>
                    </a>
                </div>
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <?php
                    if( get_theme_mod( 'pu_facebook_handle')){
                        ?>
                        <a href="http://facebook.com/<?php echo get_theme_mod( 'pu_facebook_handle' );?>" class="social-icon si-small si-borderless si-facebook" target="_blank">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>    
                        <?php
                    }
                    
                    if( get_theme_mod( 'pu_twitter_handle' ) ){
                        ?>
                        <a href="http://twitter.com/<?php echo get_theme_mod( 'pu_twitter_handle' );?>" class="social-icon si-small si-borderless si-twitter" target="_blank">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <?php
                    }

                    if( get_theme_mod( 'pu_instagram_handle' ) ){
                        ?>
                        <a href="http://instagram.com/<?php echo get_theme_mod( 'pu_instagram_handle' );?>" class="social-icon si-small si-borderless si-twitter" target="_blank">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                        <?php
                    }
                    ?>

                </div>

                <div class="clear"></div>
                <?php
                if ( get_theme_mod( 'pu_email_handle' ) ){
                    ?>
                    <i class="icon-envelope2"></i> <?php echo get_theme_mod( 'pu_email_handle' );?> <span class="middot">&middot;</span>
                    <?php
                }

                if ( get_theme_mod( 'pu_phone_handle' ) ){
                    ?>
                    <i class="icon-headphones"></i> <?php echo get_theme_mod( 'pu_phone_handle' );?>
                    <?php
                }
                ?>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->

<?php wp_footer(); ?>

</body>

</html>