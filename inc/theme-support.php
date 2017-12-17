<?php

/*
	
@package almendarestheme
	
	========================
		THEME SUPPORT OPTIONS
	========================
*/

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
    load_theme_textdomain('almendares', get_template_directory() . '/languages');
}


function create_post_type()
{
    register_post_type( 'videos_destacados',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Videos Destacados', 'almendares' ),
                'singular_name' => __( 'Videos Destacados', 'almendares' ),
                'add_new_item' => __( 'Adicionar nuevo Video', 'almendares' ),
                'edit_item' => __( 'Editar Video', 'almendares' ),
                'new_item' => __( 'Nuevo Video', 'almendares' ),
                'view_item' => __( 'Ver Video', 'almendares' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'page-attributes'),
            'rewrite' => array('slug' => 'videos-destacados'),
            'menu_position' => 6,
//          'menu_icon' => '',
        )
    );
}

add_action('init', 'create_post_type');


function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<nav class='blog-pagination'>";
         echo "<ul style=\" -moz-box-pack: center !important; justify-content: center !important;\" class=\"pagination\">";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class=\"page-item\"><a class=\"page-link\" href='".get_pagenum_link(1)."'>&laquo;</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li class=\"page-item\"><a class=\"page-link\" href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class=\"page-item active\"> <span class=\"page-link\">".$i."</span></li>":"<li class=\"page-item\"><a class=\"page-link\" href='".get_pagenum_link($i)."' >".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li class=\"page-item\"><a class=\"page-link\" href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class=\"page-item\"><a class=\"page-link\" href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
         echo "</ul>\n";
         echo "</nav>\n";
     }
}

$options = get_option('post_formats');
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
foreach ($formats as $format) {
    $output[] = (@$options[$format] == 1 ? $format : '');
}
if (!empty($options)) {
    add_theme_support('post-formats', $output);
}

$header = get_option('custom_header');
if (@$header == 1) {
    add_theme_support('custom-header');
}

$background = get_option('custom_background');
if (@$background == 1) {
    add_theme_support('custom-background');
}
add_theme_support('post-thumbnails');

add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

/* Activate Nav Menu Option */
function almendares_register_nav_menu()
{
    register_nav_menu('primary', 'Header Navigation Menu');
}

add_action('after_setup_theme', 'almendares_register_nav_menu');

/*
	========================
		BLOG LOOP CUSTOM FUNCTIONS
	========================
*/

function almendares_posted_meta()
{
    $posted_on = human_time_diff(get_the_time('U'), current_time('timestamp'));

    $categories = get_the_category();
    $separator = ', ';
    $output = '';
    $i = 1;

    if (!empty($categories)):
        foreach ($categories as $category):
            if ($i > 1): $output .= $separator; endif;
            $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr('Ver todos los posts in%s', $category->name) . '">' . esc_html($category->name) . '</a>';
            $i++;
        endforeach;
    endif;
    $publicado = __('Publicado hace', 'almendares');

    return '<span class="posted-on">' . $publicado . ' <a href="' . esc_url(get_permalink()) . '">' . $posted_on . '</a> </span> / <span class="posted-in">' . $output . '</span>';
}

function almendares_posted_footer()
{
    $comments_num = get_comments_number();
    if (comments_open()) {
        if ($comments_num == 0) {
            $comments = __('No hay comentarios', 'almendares');
        } elseif ($comments_num > 1) {
            $comments = $comments_num . __(' Comentarios', 'almendares');
        } else {
            $comments = __('1 Comentario', 'almendares');
        }
        $comments = '<a class="pull-right" href="' . get_comments_link() . '">' . $comments . ' <span class="sunset-icon sunset-comment"></span></a>';
    } else {
        $comments = __('Comentarios cerrados', 'almendares');
    }

    return '<div class="post-footer-container"><div class="row"><div class="col-xs-12 col-sm-6" style="padding-left: 0;">' . get_the_tag_list('<div class="tags-list"><span class="fa fa-tags"></span> ', ' ', '</div>') . '</div><div class="col-xs-12 col-sm-6 cant-coments">' . $comments . '</div></div></div>';
}


function TemplateListComment($comment, $args, $depth)
{
    if ('div' === $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li ';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?><?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
<?php endif; ?>
    <div class="comment-author vcard">
        <?php printf(__('<cite class=""><b>%s</b></cite> <cite class="says">dice:</cite>'), get_comment_author_link()); ?>
    </div>
    <?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Tu comentario está pendiente de moderación.'); ?></em>
    <br/>
<?php endif; ?>

    <?php comment_text(); ?>

    <div class="reply row">
        <div class="col-xs-12 col-sm-6">
            <p><?php
                /* translators: 1: date, 2: time */
                printf(__('%1$s'), get_comment_date()); ?></p><?php edit_comment_link(__('(Editar)'), '  ', '');
            ?>
        </div>
        <div class="col-xs-12 col-sm-6">
            <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'after' => ' <i class="fa fa-reply"></i>', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
        </div>
    </div>
    <?php if ('div' != $args['style']) : ?>
    </div>
<?php endif; ?>
    <?php
}

function almendares_get_attachment()
{

    $output = '';
    if (has_post_thumbnail()):
        $output = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
    else:
        $attachments = get_posts(array(
            'post_type' => 'attachment',
            'posts_per_page' => 1,
            'post_parent' => get_the_ID()
        ));
        if ($attachments):
            foreach ($attachments as $attachment):
                $output = wp_get_attachment_url($attachment->ID);
            endforeach;
        endif;

        wp_reset_postdata();

    endif;

    return $output;
}


function almendares_get_embedded_media($type = array())
{
    $content = do_shortcode(apply_filters('the_content', get_the_content()));
    $embed = get_media_embedded_in_content($content, $type);

    if (in_array('audio', $type)):
        $output = str_replace('?visual=true', '?visual=false', $embed[0]);
    else:
        $output = $embed[0];
    endif;

    return $output;
}

function almendares_get_bs_slides($attachments)
{

    $output = array();
    $count = count($attachments) - 1;

    for ($i = 0; $i <= $count; $i++):

        $active = ($i == 0 ? ' active' : '');

        $n = ($i == $count ? 0 : $i + 1);
        $nextImg = wp_get_attachment_thumb_url($attachments[$n]->ID);
        $p = ($i == 0 ? $count : $i - 1);
        $prevImg = wp_get_attachment_thumb_url($attachments[$p]->ID);

        $output[$i] = array(
            'class' => $active,
            'url' => wp_get_attachment_url($attachments[$i]->ID),
            'next_img' => $nextImg,
            'prev_img' => $prevImg,
            'caption' => $attachments[$i]->post_excerpt
        );

    endfor;

    return $output;

}

function almendares_grab_url()
{
    if (!preg_match('/<a\s[^>]*?href=[\'"](.+?)[\'"]/i', get_the_content(), $links)) {
        return false;
    }
    return esc_url_raw($links[1]);
}

//Sidebar
register_sidebar(array(
    'name' => 'Sidebar Post',
    'id' => 'sidebar-post',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>',
));

function almendares_post_navigation()
{

    $nav = '<div class="row">';

    $prev = get_previous_post_link('<div class="post-link-nav"><span class="sunset-icon sunset-chevron-left" aria-hidden="true"></span> %link</div>', '%title');
    $nav .= '<div class="col-xs-12 col-sm-6">' . $prev . '</div>';

    $next = get_next_post_link('<div class="post-link-nav">%link <span class="sunset-icon sunset-chevron-right" aria-hidden="true"></span></div>', '%title');
    $nav .= '<div class="col-xs-12 col-sm-6 text-right">' . $next . '</div>';

    $nav .= '</div>';

    return $nav;

}

function almendares_get_post_navigation()
{

    if (get_comment_pages_count() > 1 && get_option('page_comments')):

        require(get_template_directory() . '/inc/templates/almendares-comment-nav.php');

    endif;

}

