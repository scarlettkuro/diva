<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<section class="atmosphere" id="atmosphere">
	<div class="layer">
		<video src="video/video.mp4" autoplay muted loop></video>
	</div>
	<div class="container">
		<div class="content">
			<p class="title">Производство и продажа женской одежды оптом</p>
			<p class="description">Доставляем по всей России</p>
			<div class="links">
				<div class="wrap wrap-1">
					<a href="#" class="link-1">Получить каталог на e-mail</a>
				</div>
				<div class="wrap wrap-2">
					<a href="#" class="link-2">Бесплатная консультация</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="collections" id="collections">
	<div class="container">
		<div class="content">
			<div class="industrial">
				<p class="title">Промышленные коллекции</p>
				<div class="items clearfix">
					<div class="item">
						<div class="watch">
							<a href="#">Смотреть</a>
						</div>
					</div>
					<div class="item">
						<p class="title">
							<span class="book">Коллекция</span>
							<span class="bold">Весна</span>
							<span class="bold-2">2015</span>
						</p>
						<div class="watch">
							<a href="#">Смотреть</a>
						</div>
					</div>
					<div class="item">
						<p class="title">
							<span class="book">Коллекция</span>
							<span class="bold">Весна</span>
							<span class="bold-2">Лето</span>
							<span class="bold-3">2014</span>
						</p>
						<div class="watch">
							<a href="#">Смотреть</a>
						</div>
					</div>
					<div class="item">
						<p class="title">
							<span class="book">Коллекция</span>
							<span class="bold">Осень-</span>
							<span class="bold-2">Зима</span>
							<span class="bold-3">2013-</span>
							<span class="bold-4">2014</span>
						</p>
						<div class="watch">
							<a href="#">Смотреть</a>
						</div>
					</div>
					<div class="item">
						<p class="title">
							<span class="book">Коллекция</span>
							<span class="bold">Весна-</span>
							<span class="bold-2">Лето</span>
							<span class="bold-3">2013</span>
						</p>
						<div class="watch">
							<a href="#">Смотреть</a>
						</div>
					</div>
					<div class="item">
						<p class="title">
							<span class="bold">Другие</span>
						</p>
						<div class="watch">
							<a href="#">Смотреть</a>
						</div>
					</div>
				</div>
			</div>
			<div class="creative">
				<p class="title">Творческие коллекции</p>
				<div class="items clearfix">
					<div class="item">
						<p class="title">
							<span class="text-left">Aqua-</span>
							<span class="text-right">terra</span>
						</p>
						<div class="watch">
							<a href="#">Смотреть</a>
						</div>
					</div>
					<div class="item">
						<p class="title">
							<span>Замок белой цапли</span>
						</p>
						<div class="watch">
							<a href="#">Смотреть</a>
						</div>
					</div>
				</div>
			</div>
			<p class="title">Получите каталог с оптовыми ценами</p>
		</div>
	</div>
</section>
<section class="form" id="form">
	<div class="layer">
		<div class="container">
			<div class="content">
				<div class="magazine">
				</div>
				<form action="">
					<div class="input-wrap name">
						<div class="input-in">
							<input type="text" placeholder="Ваше имя">
						</div>
					</div>
					<div class="input-wrap mail">
						<div class="input-in">
							<input type="text" placeholder="Ваш e-mail">
						</div>
					</div>
					<div class="input-wrap phone">
						<div class="input-in">
							<input type="text" placeholder="Ваш телефон с кодом">
						</div>
					</div>
					<div class="get-button">
						<input type="submit" value="Получить">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
