<ol class="comment-list">
    <?php
    wp_list_comments(array(

        'short_ping' => true,
        'avatar_size' => 75,
        'callback' => TemplateListComment
    ));
    ?>
</ol>


<?php comment_form(); ?>