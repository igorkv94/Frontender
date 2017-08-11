<article id="<?php the_ID(); ?>" <?php post_class("post"); ?>>
    <header class="post__header">
        <h1 class="post__header__text">
            <?php $meta_value = get_post_meta($post->ID, 'source', true );
            $title = get_the_title();
            if(!empty($meta_value)) {
                echo '<a href="'.$meta_value.'" rel="nofollow noopener noreferrer" target="_blank">'.$title.'</a>';
            }
            else{
                echo $title;
            }
            ?>
        </h1>
    </header>
    <section class="post__text post__text-video">
        <?php the_content(); ?>
    </section>
    <section class="post__video">
            <iframe width="560" height="349" src=" <?php $meta_value = get_post_meta($post->ID, 'video', true );
            if(!empty($meta_value)) {
                echo $meta_value;
            }
            ?>" frameborder="0" allowfullscreen></iframe>
    </section>
    <footer class="post__footer">
        <small>Добавлено: <?php the_time('F j, Y') ?></small>
    </footer>
</article>
