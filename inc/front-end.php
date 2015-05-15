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
  $loop = new WP_Query($args);
?>

<ul>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <li>
      <?php if($display_as_link) { ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      <?php } else { ?>
        <?php the_title(); ?>
      <?php } ?>
    </li>
  <?php endwhile; wp_reset_query();?>
</ul>

<?php echo $after_widget; ?>

