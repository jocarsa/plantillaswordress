<?php get_header(); ?>
<div id="contenedor">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="<?php if (is_page() || is_single()) {
                            echo "pagina";
                        }else{
                            echo "entrada";
                        } ?>">
            <?php
                    if (has_post_thumbnail()) {
                        // Display the featured image
                        the_post_thumbnail();
                    }
                ?>
            <h3>
                <?php the_title(); ?>
            </h3>
                
            <div class="contenido">
                <?php 
                if (is_page()) {
                    the_content();
                }
                if (is_single()) {
                    the_content();
                }
                ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
