<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Diva</title>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styles.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/FedraSansPro/fonts.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	<script src="http://f.vimeocdn.com/js/froogaloop2.min.js"></script>
</head>
<body>
<header>
	<div class="container">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
		</div>
		<nav>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
				<li><a href="#">О компании</a></li>  
				<li><a href="#">Доставка</a></li>
				<li><a href="#">Коллекции</a></li>	
				<li><a href="#">Контакты</a></li>
			</ul>
		</nav>
		<div class="contact-us">
			<div class="button">
				<a href="#">Закажите звонок</a>
			</div>
			<span class="description">Мы Вам перезвоним</span>

		</div>
	</div>
</header>

