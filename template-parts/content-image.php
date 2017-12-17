<article id="post-<?php the_ID(); ?>" <?php post_class('sunset-format-image'); ?>>

    <header class="entry-header text-center background-image">
        <a class="standard-featured-link" rel="nofollow" href="<?php the_permalink(); ?>">
            <img src="<?php echo almendares_get_attachment(); ?>"
                 style="width: 100%; height: 480px" alt="">
        </a>
        <?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>'); ?>

        <div class="entry-meta">
            <?php echo almendares_posted_meta(); ?>
        </div>

        <div class="entry-excerpt image-caption">
            <?php the_excerpt(); ?>
        </div>

    </header>

    <footer class="entry-footer">
        <?php echo almendares_posted_footer(); ?>
    </footer>

</article>