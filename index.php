<?php
// Calls the header
get_header();

// The Loop
while (have_posts()) {
    # code...
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php
}

// Calls The footer
get_footer();

?>
