
<?php
/**
* Template Name: Front page
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title><?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <h1> Home page</h1><?php $class = 'yellow'; ?>
    <p>lorem ipsum</p>
    <div>
      <?php if ( have_posts() ): ?>
      <?php while ( have_posts() ): ?>
      <?php the_post(); ?>
      <?php the_title(); ?>
       <?php the_content(); ?>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div><?php wp_footer(); ?>
  </body>
</html>