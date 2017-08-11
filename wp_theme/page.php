<?php get_header(); ?>
<div class="content">
    <?php
    while ( have_posts() ) :
        the_post();
        // Include the page content template.
        get_template_part( 'content', 'single' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
        if ( function_exists('myblog_pagination') )
            myblog_pagination();
    endwhile;
    ?>
</div>
<?php get_footer(); ?>
