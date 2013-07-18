<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 <?php echo print_classes(); ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 <?php echo print_classes(); ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 <?php echo print_classes(); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js <?php echo print_classes(); ?>"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
	
		<title>O papel sou eu</title>
		<meta name="description" content="">
	
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	
		<script src="<?php echo TEMPLATE_URL; ?>/js/libs/modernizr.js"></script>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>
	</head>



<body>

	<header id="intro" role="banner">
        <h1><a href="<?php echo SITE_URL; ?>">▓▓ O Papel Sou Eu ▓▓</a></h1>
        <nav role="navigation">
            <ul>
            <li><a href="<?php echo SITE_URL; ?>">Capa</a></li>
                <li class="show" id="archive-drop">
                    <a href="#">Arquivo</a>
                    <ul class="lvl2 hidden">
                        <?php wp_list_categories('title_li='); ?>
                    </ul>
                </li>
                <li><a href="/estante">Estante</a></li>
                <li><a href="<?php echo print_page_permalink('sobre'); ?>">Sobre</a></li>
                <li><a href="#">Leia-me</a></li>
            </ul>
        </nav>
        
        <ul id="social">
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Tumblr</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>

        <?php get_search_form(); ?>

    </header>
