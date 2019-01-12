<section id="welcome">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Main Text</h1>
				<div class="lead mb-5">Description - some text</div>
				<div class="my-btn">
					<span class="bg-green">Catalogue</span>
				</div>
			</div>
		</div>
	</div>	
</section>


<!-- <?php echo do_shortcode('[recent_products limit="4" columns="5"]'); ?>

<?php 
	        $custom_query = new WP_Query( array( 'post_type' => 'product') );
	        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
<?php the_title(); ?>
<?php echo do_shortcode('[add_to_cart]'); ?>
<?php echo do_shortcode('[product_attribute]'); ?>
	        	<?php endwhile; endif; ?> -->