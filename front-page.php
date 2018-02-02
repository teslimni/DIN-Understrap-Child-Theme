<?php
/**
 * Template Name: Front Page
 */

get_header();
?>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        if ( have_rows( 'home_page_content' ) ) :
            while ( have_rows( 'home_page_content' ) ) : the_row();
                // Hero Image
                if ( get_row_layout() == "hero_image" ) :
                    get_template_part('inc/section', 'hero');
                endif;

                if ( get_row_layout() == "social_proof" ) :
                     get_template_part( 'inc/section', 'proof' );
                endif;

                if ( get_row_layout() == "about_section" ) :
                    get_template_part( 'inc/section', 'about' );
                endif;

                if ( get_row_layout() == "services_section" ) :
                    get_template_part( 'inc/section', 'services' );
                endif;


            endwhile;
        endif;
    endwhile; endif;
 get_footer(); ?>
