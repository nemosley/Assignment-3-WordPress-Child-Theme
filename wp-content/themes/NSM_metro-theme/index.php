<?php 
// header.php loads the presentation layer
get_header(); 
?>

<?php if (have_posts()) : ?>

    <?php 
    // The Loop: have_posts() checks the query, the_post() sets up template tags
    while (have_posts()) : the_post(); 
    ?>

        <article class="article-card">

            <?php 
            // Show featured image if post-thumbnails is enabled
            if (has_post_thumbnail()) :
                the_post_thumbnail('large');
            endif;
            ?>

            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <p><small><?php echo get_the_date(); ?></small></p>

            <p><?php the_excerpt(); ?></p>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>No posts found.</p>

<?php endif; ?>

<?php 
// footer.php closes layout + calls wp_footer()
get_footer(); 
?>
