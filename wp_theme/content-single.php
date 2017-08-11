<article id="<?php the_ID(); ?>" <?php post_class("post"); ?>>
    <header class="post__header">
	<?php $meta_value = get_post_meta($post->ID, 'source', true );
			$title = get_the_title();
			if(!empty($meta_value)) {
				echo '<h1 class="post__header__text"><a href="'.$meta_value.'" rel="nofollow noopener noreferrer" target="_blank">'.$title.'</a></h1>';
			}
			else{
				echo '<h1 class="post__header__text">'.$title."</h1>";
			}
		?>
        <h2 class="post__header__date"><small>Добавлено: <?php the_time('F j, Y') ?></small></h2>
    </header>
    <section class="post__text post__text-standard">
        <?php the_content(); ?>
    </section>
</article>
