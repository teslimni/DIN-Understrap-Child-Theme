<?php
/**
 * Template Name: Front Page
 */

get_header();
?>
<section class="jumbotron jumbotron-fluid wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
    <div class="hero carousel slide"  id="carouselhero" data-ride="carousel">
        <?php get_template_part('inc/section', 'hero'); ?>
    </div>
</section>
<section class="section social__proof wow fadeIn"  data-wow-duration="2s" data-wow-delay="1s">
    <div class="container">
        <div class="row">
            <?php get_template_part('inc/section', 'proof'); ?>
        </div>
    </div>
</section>
<section class="section wow fadeIn" id="about" data-wow-duration="2s" data-wow-delay="2s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
               <?php get_template_part('inc/section', 'about') ?>
            </div>
        </div>
    </div>
</section>
<section class="section services wow slideInRight" id="services" data-wow-duration="2s" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="section__title m-b-3">
                <h2><?php echo the_field('services_section_title'); ?></h2>
            </div>
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
<section class="section contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section__title wow fadeIn" data-wow-delay="0.5s">
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

