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

    <!-- <div class="container">
        <div class="row m-t-3">
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_77.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Interfaith Resolution Abroad, Especially in the UK with Some Nigerians</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quis impedit nisi quos. Quae culpa, alias iure repellat, vel commodi nesciunt explicabo at, beatae est assumenda? Dolorum similique earum beatae neque et, ipsum pariatur aliquid aut! Quibusdam officiis quas at saepe, illum temporibus vitae similique. Et corporis rem ea cumque. <a href="#">Read more</a></p>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_79.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Charles Hopskins Visits Sheikh Ahmed Lemu on an Official Mission</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo possimus pariatur, asperiores esse porro officiis. Iste minus perspiciatis unde incidunt consequuntur dolor corrupti quaerat. Ipsum exercitationem eveniet totam impedit reiciendis ex quidem perspiciatis sit et, harum earum eaque omnis maxime blanditiis quia distinctio. Dignissimos aperiam iure ut dolores vero fuga. <a href="#">Read more</a></p>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_81.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Iftar Get Together with Our Constituency in the Promotion of Peace for All</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum esse ratione magni voluptates omnis vel ad ipsum itaque placeat aut delectus veritatis facilis dolore harum, assumenda quod aperiam quia facere incidunt labore sequi. Beatae, laboriosam ut laborum voluptates enim ipsum dolores quasi. Similique commodi voluptas aliquid excepturi, cumque totam odio. <a href="#">Read more</a></p>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_50.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Sheikh Ahmad Lemu Bags the 2014 King Faisal Awards for Service to Islam</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum esse ratione magni voluptates omnis vel ad ipsum itaque placeat aut delectus veritatis facilis dolore harum, assumenda quod aperiam quia facere incidunt labore sequi. Beatae, laboriosam ut laborum voluptates enim ipsum dolores quasi. Similique commodi voluptas aliquid excepturi, cumque totam odio. <a href="#">Read more</a></p>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_89.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">IET Staff Paying Active Attention During the Staff Capacity Building Program</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum esse ratione magni voluptates omnis vel ad ipsum itaque placeat aut delectus veritatis facilis dolore harum, assumenda quod aperiam quia facere incidunt labore sequi. Beatae, laboriosam ut laborum voluptates enim ipsum dolores quasi. Similique commodi voluptas aliquid excepturi, cumque totam odio. <a href="#">Read more</a></p>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_88.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">IET Staff Taking a Group Photograph After the Staff Capacity Building</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum esse ratione magni voluptates omnis vel ad ipsum itaque placeat aut delectus veritatis facilis dolore harum, assumenda quod aperiam quia facere incidunt labore sequi. Beatae, laboriosam ut laborum voluptates enim ipsum dolores quasi. Similique commodi voluptas aliquid excepturi, cumque totam odio. <a href="#">Read more</a></p>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3">
                      <img class="card-img-top" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_95.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">Bro. Ibrahim Bello Concluding the Session with a Closing Dua</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum esse ratione magni voluptates omnis vel ad ipsum itaque placeat aut delectus veritatis facilis dolore harum, assumenda quod aperiam quia facere incidunt labore sequi. Beatae, laboriosam ut laborum voluptates enim ipsum dolores quasi. Similique commodi voluptas aliquid excepturi, cumque totam odio. <a href="#">Read more</a></p>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                  <img class="card-img-top" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_97.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Life is Always Good with People Like Alpha Around. Thumbs up for Him</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum esse ratione magni voluptates omnis vel ad ipsum itaque placeat aut delectus veritatis facilis dolore harum, assumenda quod aperiam quia facere incidunt labore sequi. Beatae, laboriosam ut laborum voluptates enim ipsum dolores quasi. Similique commodi voluptas aliquid excepturi, cumque totam odio. <a href="#">Read more</a></p>
                  </div>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                  <img class="card-img-top" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_99.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Sis. Rabi Receiving the Most Punctual Staff Award from Sis. Ruqayyah</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum esse ratione magni voluptates omnis vel ad ipsum itaque placeat aut delectus veritatis facilis dolore harum, assumenda quod aperiam quia facere incidunt labore sequi. Beatae, laboriosam ut laborum voluptates enim ipsum dolores quasi. Similique commodi voluptas aliquid excepturi, cumque totam odio. <a href="#">Read more</a></p>
                  </div>
                </div>
                </div>
            </div>
            <button type="button" class="btn btn-danger m-t-2 m-b-3 article__btn">View all our articles</button>
        </div>
    </div> -->
</section>
<section class="section" id="partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section__title">
                    <h2>
                        Our Partners
                        <span></span>
                    </h2>
                </div>
            </div>
            <div class="col-md-12">
                <ul class="list-inline text-center">
                    <li class="list-inline-item"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_112.jpg" ></li>
                    <li class="list-inline-item"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_106.jpg" alt=""></li>
                    <li class="list-inline-item"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_109.jpg" ></li>
                    <li class="list-inline-item"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/New-DIN-Homepage-Recovered_112.jpg" ></li>
                </ul>
            </div>
        </div>
        <button type="button" class="btn btn-danger m-t-2 m-b-3 article__btn">View all our partners</button>
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

