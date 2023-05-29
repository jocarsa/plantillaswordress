<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h3>
            <?php the_title(); ?>
        </h3>
        <div class="contenido">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
    <?php wp_footer(); ?>
</body>
</html>