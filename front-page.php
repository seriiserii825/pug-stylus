<?php
/**
 * Template Name: Front page
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title><?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<h1> Home page</h1><?php $class = 'yellow'; ?>
<header class="main-header">
    <h2 class="main-header__title">header title</h2>
    <h3 class="main-header__subtitle">Header subtitle</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda at atque consequatur cum cupiditate distinctio eaque explicabo impedit in incidunt inventore ipsum labore laboriosam magni maxime molestiae molestias mollitia nesciunt nobis odit optio quaerat quas quisquam quo quod, ratione recusandae temporibus vel veritatis. Ab cupiditate dignissimos earum incidunt, natus nesciunt nisi nobis nostrum quidem quod ratione rem rerum ut vel velit! Accusamus accusantium, alias dicta eligendi error excepturi exercitationem id in incidunt maxime non pariatur placeat provident sed, sequi tempora vel, velit. Aut est fuga minus nam nemo quos similique sit voluptatibus. Animi autem consequatur cupiditate deserunt dolores sunt.</p>
</header>

<div class="main-content">
	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ): ?>
			<?php the_post(); ?>
			<?php the_title(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>
<footer class="main-footer">
    <h4 class="<?php echo $class; ?>">Main footer</h4>
</footer><?php wp_footer(); ?>
</body>
</html>