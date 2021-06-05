<?php 

function website_for_gym_post_types() {   
    
    //Register Classes Post Type

    register_post_type('Classes', array(           

        'show_in_rest'  => true,
        'supports'      =>      array ('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'       =>      array ('slug'   =>   'classes'),
        'has_archive'   =>      true,
        'public'        =>      true,
        
        'labels'           =>   array (


            'name'          =>  'Classes',         
            'add_new_item'  =>  'Add New class',
            'edit_item'     =>  'Edit classes',
            'all_items'     =>  'All classes',
            'singular_name' =>  'Class'


        ),

        'menu_icon'     =>      'dashicons-edit-large'
        
  

    ) );

       //Register Instructor Post Type

       register_post_type('instructors', array(           

        'show_in_rest'  => true,
        'supports'      =>      array ('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'       =>      array ('slug'   =>   'instructors'),
        'has_archive'   =>      true,
        'public'        =>      true,
        
        'labels'           =>   array (


            'name'          =>  'Instructors',         
            'add_new_item'  =>  'Add New instructor',
            'edit_item'     =>  'Edit instructor',
            'all_items'     =>  'All instructors',
            'singular_name' =>  'instructor'


        ),

        'menu_icon'     =>      'dashicons-edit-large'
        
  

    ) );

       //Register Testimonial Post Type

       register_post_type('testimonials', array(           

        'show_in_rest'  => true,
        'supports'      =>      array ('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'       =>      array ('slug'   =>   'Testimonials'),
        'has_archive'   =>      true,
        'public'        =>      true,
        
        'labels'           =>   array (


            'name'          =>  'Testimonials',         
            'add_new_item'  =>  'Add New Testimonial',
            'edit_item'     =>  'Edit Testimonial',
            'all_items'     =>  'All Testimonials',
            'singular_name' =>  'Testimonial'


        ),

        'menu_icon'     =>      'dashicons-edit-large'
        
  

    ) );



}


add_action('init', 'website_for_gym_post_types');