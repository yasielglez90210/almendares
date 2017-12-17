<?php
get_header('blog');

if (have_posts()):
    while (have_posts()): the_post();
        get_template_part('template-parts/content-page', 'page');
    endwhile;
endif;

get_footer();