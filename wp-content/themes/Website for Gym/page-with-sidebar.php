<?php  

/*

Template Name: Page with Sidebar

*/
get_header();
?>


<main class="container page section with-sidebar">
    <div class="page-content">
        <?php  get_template_part('template-parts/page', 'loop'); ?>
    </div>

   <?php echo get_sidebar(); ?>

</main>
<?php
get_footer();
?>

