<article id="<?php the_ID(); ?>" <?php post_class("post"); ?>>
    <header class="post__header">
        <h1 class="post__header__text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <h2 class="post__header__date"><small>Добавлено: <?php the_time('F j, Y') ?></small></h2>
    </header>
    <section class="post__text post__text-standard">
        <?php the_excerpt(); ?>
    </section>
</article>
