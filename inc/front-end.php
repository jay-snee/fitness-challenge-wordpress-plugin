<?php

  echo $before_widget;
  
  echo $before_title . $title . $after_title;

  $args = array(
    'posts_per_page'   => $num_trophies,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'trophy',
    'post_status'      => 'publish',
    'suppress_filters' => true 
  );
  $posts_array = get_posts( $args );



  if ($posts_array->have_posts() ) : 
    while ( have_posts() ) : the_post(); 
      echo the_post();
    endwhile;
  endif; 


  wp_reset_query();
  echo $after_widget;

?>

