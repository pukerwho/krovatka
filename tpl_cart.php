<?php
/*
Template Name: Cart Page
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row my-5">
		<div class="col-md-12">
			<h1 class="pt-5"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-md-12">
				<div class="page-content lead p-4 mb-5">
					<?php echo do_shortcode('[woocommerce_cart]'); ?>		
				</div>				
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>