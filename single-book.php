<?php
/**
 * Template Name: Book
 *
 * @package understrap-child
 */
get_header(); ?>
<div class="wrapper" id="wrapper-index">
    <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if(have_rows('book') ) : ?>
        <?php while( have_rows('book') ) : the_row(); ?>
            <?php if( get_row_layout() == 'book_identity' ) : ?>
                <?php $bg = get_sub_field('hero_bg'); ?>
    <div id="content" class="container-fluid bg-success bg-box" style="background-image: url(<?php echo $bg; ?>)">
            <?php endif; endwhile; ?>
    <?php endif; ?>
        <div class="row p-t-3 p-b-3">
             <div class="col-sm-12 col-md-8 offset-md-2">
                    <?php if(have_rows('book') ) : ?>
                        <?php while( have_rows('book') ) : the_row(); ?>
                            <?php if( get_row_layout() == 'book_identity' ) : ?>
                <div class="row">
                                <div class="col-sm-6 book-cover">
                                   <img src="<?php the_sub_field('book_cover_image'); ?>"> 
                                </div> 
                                <hr>
                                <div class="col-sm-6 book-id-title">
                                    <h2 class="h1">
                                        <?php the_sub_field('book_title'); ?>
                                    </h2>
                                    <h4>
                                        <?php the_sub_field('book_sub_title'); ?>
                                    </h4>
                                        
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>

            </div><!-- .col-sm-12-->
        </div><!-- .row -->
    </div><!-- container-fluid -->
        <div class="container content-book m-t-3 p-t-3">
        <div class="row">
            <div class="col-md-8 offset-md-2 content-read p-b-2 p-t-1 m-b-1" id="accordion" role="tablist" aria-multiselectable="true">
                <?php if(have_rows('content') ) : ?>
                    <?php $expandableHeading = 1; ?>
                     <?php $collapseContent = 1; ?>
                     <?php $ariaControls = 1; ?>
                    <?php while( have_rows('content') ) : the_row(); ?>
                        <div class="content-block m-b-1">
                            <div class="heading-book" role="tab">
                                <h2 class="h5">
                                    <a data-toggle="collapse" href="#<?php echo $expandableHeading++; ?>" aria-expanded="true" aria-controls="$ariaControls">
                                        <?php the_sub_field('heading'); ?>    
                                    </a>
                                </h2>
                            </div>
                            <div class="book-content collapse show" id="<?php echo $collapseContent++; ?>" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <?php the_sub_field('content_text'); ?>
                            </div> 
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div><!-- .col-md-8 -->
        </div><!-- .row -->
        <div class="row bg-primary book-optin-bg p-t-3">
            <div class="col-md-4 offset-md-2">
                <?php if(have_rows('book_download') ) : ?>
                    <?php while( have_rows('book_download') ) : the_row(); ?>
                        <?php if( get_row_layout() == 'download_book' ) : ?>
                            <?php  the_sub_field('opt-in_form'); ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <?php if(have_rows('book_download') ) : ?>
                    <?php while( have_rows('book_download') ) : the_row(); ?>
                        <?php if( get_row_layout() == 'download_book' ) : ?>
                            <?php  the_sub_field('book_image'); ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div><!-- Container end -->
<?php endwhile; endif; ?>
</div><!-- Wrapper end -->
<?php get_footer(); ?>