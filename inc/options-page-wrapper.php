<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2><?php esc_attr_e( 'Fitness Challenge Plugin Settings', 'wp_admin_style' ); ?></h2>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h3><span>Most Recent Trophies</span></h3>

						<div class="inside">
							<h4>Last 100 Trophies Awarded</h4>
							<?php 
								$args = array(
							    'posts_per_page'   => 100,
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
							      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							    </li>
							  <?php endwhile; wp_reset_query();?>
							</ul>
					</div>
						

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<h3><span>Help</span></h3>

						<div class="inside">
							<p></p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
