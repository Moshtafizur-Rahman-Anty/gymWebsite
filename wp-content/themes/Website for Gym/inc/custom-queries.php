<?php  

function classes_queries($query) {

?>


<?php
    if(!is_admin() AND is_post_type_archive('classes') AND $query->is_main_query()) {

    
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        
    

    }
    
   
}

?>





<?php 

add_action('pre_get_posts', 'classes_queries');

?>





