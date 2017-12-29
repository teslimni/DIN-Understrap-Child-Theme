<?php
/**
 * Template Name: Front Page
 */

get_header();
?>
<section class="jumbotron jumbotron-fluid">
    <div class="hero">
        <?php get_template_part('inc/section', 'hero'); ?>
    </div>
</section>
<section class="section social__proof">
    <div class="container">
        <div class="row">
            <?php get_template_part('inc/section', 'proof'); ?>
        </div>
    </div>
</section>
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
               <?php get_template_part('inc/section', 'about') ?>
            </div>
        </div>
    </div>
</section>
<section class="section services" id="services">
    <div class="container">
        <div class="row">
            <h2 class="section__title"><?php echo the_field('services_section_title'); ?></h2>
            <?php get_template_part('inc/section', 'services'); ?>
        </div>
    </div>
</section>
<section class="section gallery" id="gallery">
    <div class="container">
        <!-- <div class="row"> -->
            <?php get_template_part('inc/section', 'gallery'); ?>
    </div>
</section>
<section class="section book" id="book">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php get_template_part('inc/section', 'book'); ?>
            </div>
        </div>
    </div>
</section>
<section class="section" id="articles">
    <?php get_template_part('inc/section', 'articles'); ?>
</section>
<section class="section" id="partners">
    <div class="container">
        <?php get_template_part('inc/section','partners'); ?>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section__title">
                    <h2>
                        Contact Us
                        <span></span>
                    </h2>
                    <h3 class="text-center">Yep, no robot here. Get in touch and a human will reply</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

