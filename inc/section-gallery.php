<?php
// check if the flexible content field has rows of data
if( have_rows('gallery_section') ):
    // loop through the rows of data
    while ( have_rows('gallery_section') ) : the_row();
        // check current row layout
        if( get_row_layout() == 'gallery_content' ): ?>
        <div class="row">
            <div class="section__title">
                <h2>
                    <?php the_sub_field('gallery_title'); ?>
                    <span></span>
                </h2>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="gallery__feature">
                            <img class="img-fluid" src="<?php the_sub_field('featured_image'); ?>" alt="#">
                       </div>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <?php the_sub_field('feature_image_text'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- end of section row -->
        <div class="row m-t-3">
            <div class="col-md-12">
                <div class="row">
                    <?php $images = get_sub_field('gallery_images');
                    //var_dump($images); ?>
                    <?php if ($images ) : ?>
                        <?php foreach ( $images as $image ) : ?>
                    <div class="col-xs-6 col-md-3">
                        <img class="img-fluid m-b-2" src="<?php echo $image['url']; ?>" alt="#">
                    </div>
                    <?php endforeach; endif; ?>
                </div>

                   <button type="button" class="btn btn-danger m-t-2 gallery__btn">
                        <a href="<?php the_sub_field('gallery_button_url'); ?>">
                            <?php the_sub_field('gallery_button_text'); ?>
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <?php endif;
    endwhile;
endif;
?>

