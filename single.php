<?php

get_header('blog'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container-fluid margin-fluid">

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
                            get_template_part('template-parts/single', get_post_format()); ?>
                            <div class="navigation post-navigation">
                                <div class="nav-links row">
                                    <div class="nav-previous col-xs-6">
                                        <?php previous_post_link($format = '<i class="fa fa-arrow-left"></i> &nbsp' . '%link') ?>
                                    </div>
                                    <div class="nav-next col-xs-6">
                                        <?php next_post_link($format = '%link' . '&nbsp <i class="fa fa-arrow-right"></i>') ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (comments_open()):
                                comments_template();
                            endif;

                        endwhile;

                    endif;
                    ?>
                </div>


                <div class="col-xs-12 col-lg-4 sidebar">
                    <?php dynamic_sidebar('Sidebar Post') ?>
                </div>

            </div>

        </main>
    </div>

<?php get_footer(); ?>