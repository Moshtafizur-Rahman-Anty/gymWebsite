<?php get_header(); ?>


<main class="container page section">

<?php $author   =    get_queried_object(); ?>

<h2 class="text-center primary-text">Author: <?php echo $author->data->display_name; ?></h2>

<?php get_template_part('template-parts/blog', 'loop') ?>


</main>


<?php get_footer(); ?>