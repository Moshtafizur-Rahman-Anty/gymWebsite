<?php
    while(have_posts()) {
        the_post();
        ?>
        <h1 class="text-center text-primary"><?php the_title(); ?> </h1>


        <?php 
        
        if(has_post_thumbnail() )  {
            the_post_thumbnail('blog', array('class' => 'featured-image'));
        }

      
        ?>

        <?php 
        
            if(get_post_type() === 'classes') {
                
    
                $start_time   =   get_field('start_time');
                $end_time     =   get_field('end_time'); 
            
            ?>
            
           
                <p class="content-class"><?php echo the_field('class_days') . " - " . $start_time . " to " . $end_time; ?></p><?php
            }
        
        ?>

      <div class="content_about"><?php the_content();  ?></div>
    
 <?php   }
 ?>