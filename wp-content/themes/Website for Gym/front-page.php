<?php  

get_header('front');

?>

<?php while(have_posts()) {

    the_post();

?>

    <section class="welcome text-center section">
        <h2 class="text-primary">
            <?php the_field('welcome_header'); ?>
        </h2>
        <p>
           <?php the_field('welcome_text'); ?>
        </p>
    </section>


    <section class="section-areas">

        <ul class="areas-container">
        
            <li class="area">
            
                <?php  
                
                    $area1 = get_field('area_1');
                    $image = wp_get_attachment_image_src( $area1['area_image'], 'mediumSize')[0];
                
                ?>

                <img src="<?php echo $image ?>" alt="">
                <p><?php echo $area1['area_name'] ?></p>

            </li>

            <li class="area">
            
            <?php  
            
                $area2 = get_field('area_2');
                $image = wp_get_attachment_image_src( $area2['area_image'], 'mediumSize')[0];
            
            ?>

            <img src="<?php echo $image ?>" alt="">
            <p><?php echo $area2['area_name'] ?></p>

        </li>

        
        <li class="area">
            
            <?php  
            
                $area3 = get_field('area_3');
                $image = wp_get_attachment_image_src( $area3['area_image'], 'mediumSize')[0];
            
            ?>

            <img src="<?php echo $image ?>" alt="">
            <p><?php echo $area3['area_name'] ?></p>

        </li>

        <li class="area">
            
            <?php  
            
                $area4 = get_field('area_4');
                $image = wp_get_attachment_image_src( $area4['area_image'], 'mediumSize')[0];
            
            ?>

            <img src="<?php echo $image ?>" alt="">
            <p><?php echo $area4['area_name'] ?></p>

        </li>

        </ul>

    </section>


    <section class="classes-homepage">
        <div class="container section">
            <h2 class="text-primary text-center">Our Classes</h2>
            <main class="container page section classes-index">
<ul class="classes-list">

 <?php 

 $classes = new WP_Query(array(
    'post_type' =>   'classes',
    'posts_per_page'    =>      '4'
 ));
 while($classes->have_posts()) {

    $classes->the_post(); ?>

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

 wp_reset_postdata();
 
 ?>



</ul>



<div class="button-container">
    <a class="button" href="<?php echo get_post_type_archive_link('classes') ?>">View all Classes</a>
</div>


</main>
        </div>



    </section>



<section class="instructors">

 
<div class="container section">
        <h2 class="text-center">Our Instructors</h2>
        <p class="text-center">Professional instructors that will help you achieve your goal</p>
    

    <ul class="instructor-list">
    
        <?php 
           

            $instructors    =   new WP_Query(array (
                'post_type' =>  'instructors'
            ));

            while($instructors->have_posts()  ) {
                $instructors->the_post(); ?>
                <li class="instructor">
                <?php the_post_thumbnail('mediumSize'); ?>
                <div class="content text-center">
                
                <h3><?php  the_title();  ?></h3>
                <?php the_content(); ?>

                <div class="specialty">
                    <?php 
                    
                        $specialty  =   get_field('specialty');

                        foreach ($specialty as $s) { ?>

                           <span class="tag"><?php echo $s; ?></span>

                         <?php   
                        }
                    
                    ?>
                </div>
         
                </div>
                </li>

           <?php       
            }

            
            wp_reset_postdata();
        
        ?>

    </ul>
    </div>


</section>


<section class="testimonials">
    <h2 class="text-center">
        Testimonials
    </h2>
    <div class="container-testimonials">
        <ul class="testimonials-list">
            <?php 
            
            $testimonials = new WP_Query(array(
                'post_type' =>  'testimonials'
            ));

            while($testimonials->have_posts()) {
                $testimonials->the_post();

            ?>
            <li class="testimonial text-center">

                <blockquote>
                    <?php the_content(); ?>
                </blockquote>
                <div class="testimonial-footer">
                    <?php the_post_thumbnail('thumbnail');  ?>
                    <p><?php the_title(); ?></p>
                </div>
            
            </li>
            <?php } wp_reset_postdata(); ?>
        
        </ul>
    </div>
</section>

<section class="blog container section">

            <h2 class="text-center">Our blogs</h2>
            <p class="text-center">Read our expert blog post to achieve ypur goal</p>

            <ul class="blog-entries">

                <?php 
                
                    $blogFront  =   new WP_Query(array (

                        'post_type'     =>      'post',
                        'posts+per_page' =>         4   

                    ));

                    while($blogFront->have_posts()) {
                        $blogFront->the_post();?>
                        <li class="card gradient">
    
                        <?php the_post_thumbnail('mediumSize'); ?>
                
                        <?php the_category(); ?>
                
                        <div class="card-content">
                        
                           <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3> </a>
                           <p class="meta">
                           
                                <span class="text-primary">By: </span>
                <a href="<?php echo get_author_posts_url(get_the_author_meta("ID"));  ?>">
                                <?php echo get_the_author_meta('display_name'); ?>
                      </a>     
                           </p>
                
                           <p class="date-published meta">
                            <span class="text-primary">Date: </span>
                                <?php the_time(get_option('date_format')); ?>
                
                           </p>
                        
                        </div>
                
                    </li>
<?php
                    }wp_reset_postdata();
                
                ?>

            </ul>

</section>

<?php } ?>

<?php get_footer(); ?>