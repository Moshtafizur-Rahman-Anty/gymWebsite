<?php get_header(); ?>

<h2 class="text-primary text-center"><?php the_archive_title(); ?></h2>

<main class="container page section">

    <?php get_template_part('template-parts/blog', 'loop') ?>

</main>


<?php get_footer(); ?>