<p>
  <label>Title</label> 
  <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>

<p>
  Total Trophies
  <?php wp_count_posts('trophy'); ?> 
</p>
<p>
  <label>How many of your most recent trophies would you you like to display?</label> 
  <input size="4" name="<?php echo $this->get_field_name('num_trophies'); ?>" type="text" value="<?php echo $num_trophies; ?>" />
</p>
<p>
  <label>Display Trophies as links to content?</label> 
  <input type="checkbox" name="<?php echo $this->get_field_name('display_as_link'); ?>" value="1" <?php checked( $display_as_link, 1 ); ?> />
</p>