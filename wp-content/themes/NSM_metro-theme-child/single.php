<?php
// Pull in header.php so this single post is not hanging by itself.
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>

        <!-- : Single post title uses <h1>  -->
        <h1><?php the_title(); ?></h1>

        <!-- : Author + date come from wp_posts + wp_users -->
        <p><small>By <?php the_author(); ?> — <?php echo get_the_date(); ?></small></p>

        <?php
        // :  featured image
        if (has_post_thumbnail()) :
            the_post_thumbnail('large');
        endif;
        ?>

        <!-- : the_content() outputs full post body -->
        <div>
            <?php the_content(); ?>
        </div>

    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
