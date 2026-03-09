 Assignment 2: Custom WordPress Theme

-WordPress Theme Structure & Architecture
My theme uses the main WordPress template files to control how the site looks. The header opens the page, loads `wp_head()`, and shows the logo and menu. The footer closes everything and includes `wp_footer()`. The templates like `index.php`, `single.php`, and `page.php` each display different types of content using The Loop. My `functions.php` file turns on features like the title tag, featured images, and the custom logo, and it registers my main menu. All the files work together through the WordPress template hierarchy.

 -The Loop & Template Tags
The Loop is how WordPress checks for posts and displays them. `have_posts()` checks if anything exists, and `the_post()` sets up each post so template tags work. I used `the_title()` for the post title, `the_permalink()` for the link, and `the_excerpt()` or `the_content()` depending on the template. I also used `the_post_thumbnail()` to show featured images and `the_author()` and `get_the_date()` on single posts. The Loop basically pulls the content from WordPress and puts it into my layout.
