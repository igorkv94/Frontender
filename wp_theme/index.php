<?php get_header(); ?>
<div class="content">

<?php
if ( get_category_children($cat) > '' ) 
	if(is_category()){
$args = array(
		'child_of' => $cat,
    'hide_empty'         => 0,
    'orderby'            => 'name',
    'order'              => 'ASC',
    'show_count'         => 0,
    'title_li'           => 0,
    'style'              => 'list',
    'echo'               => false
);
$cats = wp_list_categories($args);

if ( $cats ) {
    printf( '<ul class="cats">%s</ul>', $cats );
}
}
?>

<?php

if ( have_posts() ) {
    while ( have_posts() ) :
        the_post();
        get_template_part( 'content', get_post_format() );
    endwhile;
    if ( function_exists('myblog_pagination') )
        myblog_pagination();

}else
    get_template_part( 'content', 'none' );

?>
</div>
<?php get_footer(); ?>
