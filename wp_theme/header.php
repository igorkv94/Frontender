<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- BEGIN HEADER -->
<header class="main-header">
    <div class="main-header__left">
        <div class="logo"></div>
		<div id="nav-icon" onclick="onNavClick(this);">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
    </div>
    <div class="main-header__center">
        <?php wp_nav_menu(array(
            'theme_location' => 'main',
            'container' => 'nav',
            'container_class' => 'main-menu',
			'container_id' => 'main-menu',
            'items_wrap' => '%3$s',
            'depth' => 1,
            'walker' => new Cleaner_Walker_Nav_Menu // custom walker to replace li with div
        )); ?>
<!--        <nav class="main-menu">-->
<!--            <div class="main-menu__item"><a href="/">Главная</a></div>-->
<!--            <div class="main-menu__item"><a href="/">Статьи</a></div>-->
<!--            <div class="main-menu__item"><a href="/">Видео</a></div>-->
<!--            <div class="main-menu__item"><a href="/">Библиотеки</a></div>-->
<!--        </nav>-->
    </div>
    <div class="main-header__right">
        <?php get_search_form(); ?>
    </div>
</header>
<main class="container">