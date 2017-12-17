<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header text-center">

        <?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>'); ?>

        <div class="entry-meta">
            <?php echo almendares_posted_meta(); ?>
        </div>

    </header>

    <div class="entry-content">

        <?php if (almendares_get_attachment()): ?>

            <a class="standard-featured-link" rel="nofollow" href="<?php the_permalink(); ?>">
                <div class="standard-featured background-image"
                     style="">
                    <img src="<?php echo get_the_post_thumbnail_url(null, 'locacion_small'); ?>" style="width: 100%; height: 100%" alt="">
                </div>
            </a>

        <?php endif; ?>

        <div class="entry-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <div class="button-container text-center">
            <a rel="nofollow" href="<?php the_permalink(); ?>" class="btn btn-sunset"><?php _e('Leer mas', 'almendares'); ?></a>
        </div>

    </div>

    <footer class="entry-footer">
        <?php echo almendares_posted_footer(); ?>
    </footer>
</article>