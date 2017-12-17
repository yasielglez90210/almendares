<?php

get_header('blog'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container-fluid">

                <div class="col-xs-12 col-lg-8 contenido">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('
<ol class="breadcrumb"><li><a>', '</a></li></ol>
');
                    }
                    ?>

                    <?php
                    if (have_posts()):
                        while (have_posts()): the_post();
                            get_template_part('template-parts/content', get_post_format());
                        endwhile;
                    endif;

                    pagination(); ?>

                </div>

                <div class="col-xs-12 col-lg-4 sidebar">
                    <?php dynamic_sidebar('Sidebar Post') ?>
                </div>

            </div>

        </main>
    </div>

<?php get_footer(); ?>