<div class="col-md-12 social__proof-img">
    <ul class="list-inline social__proof-logos">
        <li class="list-inline-item h4 social__proof-text text-uppercase text-muted">
            <?php the_sub_field('intro_text'); ?>
        </li>
        <?php
            $images = get_sub_field('social_proof_images');
            if ($images) : ?>

                <?php foreach( $images as $image) : ?>
                    <li class="list-inline-item">
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
                    </li>

                <?php endforeach;
            endif; ?>
    </ul>
</div>
