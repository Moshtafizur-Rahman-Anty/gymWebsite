<?php get_header();
?>
<main class="container page section classes-index">
<ul class="classes-list">

 <?php 
 while(have_posts()) {

     the_post(); ?>

    <li class="gym-class card gradient">

    <?php the_post_thumbnail('mediumSize'); ?>

<div class="card-content">
    <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?> </h3>
    </a>
    <?php 
    
    $start_time   =   get_field('start_time');
    $end_time     =   get_field('end_time'); 

    ?>

    <p><?php echo the_field('class_days') . " - " . $start_time . " to " . $end_time; ?></p>

</div>
     </li>
<?php
 }
 
 ?>

</ul>


</main>
<?php
get_footer();
?>
