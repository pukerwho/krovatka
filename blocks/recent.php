<section id="recent" class="p-relative">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="text-center">
					<h2 class="pt-5">Products</h2>	
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="small-square"></div>
			<?php $custom_query = new WP_Query( array( 'post_type' => 'product', 'posts_per_page' => 4) );
			if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				<div class="col-md-3 mb-5">
					<?php get_template_part( 'blocks/product-cart', 'default' ); ?>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>			
			<div class="small-circle"></div>
		</div>
		<div class="row text-center mb-5">
			<div class="col-md-12">
				<div class="my-btn">
					<span class="bg-green">View all products</span>
				</div>
			</div>
		</div>
	</div>
</section>
