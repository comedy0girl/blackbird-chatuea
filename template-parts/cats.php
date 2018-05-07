<?php

    $args = array(
        'post_type' => 'hu5_baby',
        'orderby' => 'name',
        'parent' => 0
    );

    $query = new WP_Query($args);   
    $q = array();

    while ( $query->have_posts() ) { 

        $query->the_post(); 

        $a = '<a href="'. get_permalink() .'">' . get_the_title() .'</a>';

        $categories = get_the_category();

        foreach ( $categories as $key=>$category ) {

            $b = '<h3><a href="' . get_category_link( $category ) . '">' . $category->name . '</a></h3>'; 

        }

        $q[$b][] = $a; // Create an array with the category names and post titles
    }

    wp_reset_postdata();
    foreach ($q as $key=>$values) {
        echo $key;
        echo '<div class="catPostBox">';
            foreach ($values as $value){
                echo '<li>' . $value . '</li>'; ?>
                <p><?php  
                    the_excerpt(); ?>    
                </p><?php
            }
        echo '</div>';
    }

?>
