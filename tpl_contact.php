<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row my-5">
		<div class="col-md-12">
			<h1 class="pt-5"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-12">
			<?php get_template_part('blocks/breadcrumbs') ?>	
		</div>
	</div>
	<div class="row mb-5">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-md-3">
				<div class="page-content p-4">
					<div class="page-content-title mb-3">
						Address
					</div>
					<div class="page-content-text mb-4">
						<i class="fas fa-map-marker-alt mr-2"></i> Our address
					</div>
					<div class="page-content-title mb-3">
						Phone
					</div>
					<div class="page-content-text mb-4">
						<i class="fas fa-phone mr-2"></i> 999-999-9999
						<br>
						<i class="fas fa-phone mr-2"></i> 777-777-7777
					</div>
					<div class="page-content-title mb-3">
						Email
					</div>
					<div class="page-content-text">
						<i class="far fa-envelope mr-2"></i> email@gmail.com
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="64" title="Contact Us"]') ?>	
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>