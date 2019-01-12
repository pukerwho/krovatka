<?php
/*
Template Name: Каталог
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row my-5">
		<div class="col-md-12">
			<h1 class="pt-5">Catalog</h1>
		</div>
		<div class="small-square"></div>
		<div class="small-circle"></div>
	</div>
	<div class="row mb-5">
		<div class="col-md-12">
			<?php get_template_part('blocks/breadcrumbs') ?>	
		</div>
	</div>
	<div class="row">
		<?php $custom_query = new WP_Query( array( 'post_type' => 'product') );
		if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<div class="col-md-4 mb-5">
				<?php get_template_part( 'blocks/product-cart', 'default' ); ?>
			</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div>

<?php get_footer(); ?>