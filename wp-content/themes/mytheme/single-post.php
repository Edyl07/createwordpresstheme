<?php get_header() ?>
<?php if(have_posts()) : while(have_posts()) :the_post(); ?>
            <h1><?php the_title() ?></h1>
            <p>
                <img src="<?php the_post_thumbnail_url(); ?>" style="width: 100%; height: auto;" alt="">
            </p>
            <?php the_content() ?>
        <?php endwhile; endif; ?>
<?php get_footer() ?>
