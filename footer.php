<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dawahinstitute
 */

global $redux_teslim;
?>
	</div><!-- #content .row -->
</div><!-- #page .container -->
    <?php //get_sidebar('footerfull'); ?>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info container">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <img class="center-block footer-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/din-project_85.png'; ?>" alt="">
                </div>
                <div class="col-xs-12 col-md-3 footer-block">
                    <h2 class="text-uppercase"><?php echo $redux_teslim['footer-abt']; ?></h2>
                    <ul>
                        <?php echo $redux_teslim['footer-abt-content']; ?>
                    </ul>
                    <?php if( is_active_sidebar('footer-one') ) : ?>
                        <?php dynamic_sidebar('footer-one'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-md-3 footer-block">
                    <h2 class="text-uppercase">
                        <?php echo $redux_teslim['footer-2-heading']; ?>
                    </h2>
                   <?php echo $redux_teslim['footer-2-content']; ?>
                </div>
                <div class="col-xs-12 col-md-3 footer-block">
                    <h2 class="text-uppercase">
                        <?php echo $redux_teslim['footer-3-heading']; ?>
                    </h2>
                    <?php  echo $redux_teslim['footer-3-content']; ?>
                    <?php if( is_active_sidebar('footer-contact') ) : ?>
                        <?php dynamic_sidebar('footer-contact'); ?>
                    <?php endif; ?>
                </div>
            </div><!-- .row -->
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-muted text-xs-center footer-copyright">
                        Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo bloginfo('url'); ?>"><?php echo $redux_teslim['company-id']; ?></a> All Rights Reserved.
                    </p>
                    <p class="text-muted text-xs-center dev-credit">Designed and Developed by <a href="https://github.com/teslimni">Teslim Adeyemo</a></p>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
