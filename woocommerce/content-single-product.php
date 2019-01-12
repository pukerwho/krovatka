<?php while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-breadcrumb mb-5 py-4">
					<?php 
						add_action( 'mybreadcrumbs', 'woocommerce_breadcrumb', 25 );
						do_action( 'mybreadcrumbs', 'woocommerce_breadcrumb', 25 );
					?>	
				</div>
			</div>
		</div>
	</div>
<?php endwhile; // end of the loop. ?>
<div class="container">
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<?php do_action( 'woocommerce_before_single_product' ); ?>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-6">
						<?php wc_get_template( 'single-product/product-image.php' ); ?>	
					</div>
					<div class="col-md-6">
						<div class="single-product-title mb-3">
							<?php the_title(); ?>	
						</div>
						<div class="single-product-price">
							<?php wc_get_template( 'single-product/price.php' ); ?>
						</div>
						<div class="single-product-description lead">
							<?php 
								add_action( 'mytest', 'woocommerce_template_single_excerpt', 15 );
								do_action( 'mytest', 'woocommerce_template_single_excerpt', 15 );
							?>	
						</div>
						<?php 
							global $product;
							do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );
						?>
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<div class="box">
					<div class="box-title mb-3">
						Delivery
					</div>
					<div class="box-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos fuga, tenetur. Ratione ad iste veritatis!
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; // end of the loop. ?>
		<div class="row">
			<div class="col-md-12">
				<?php 
					add_action( 'myproduct_tabs', 'woocommerce_output_product_data_tabs', 15 );
					do_action( 'myproduct_tabs', 'woocommerce_output_product_data_tabs', 15 );
				?>
			</div>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<?php 
				add_action( 'myupsell', 'woocommerce_upsell_display', 15 );
				do_action( 'myupsell', 'woocommerce_upsell_display', 15 );
			?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php 
				add_action( 'myproduct_related', 'woocommerce_output_related_products', 20 );
				do_action( 'myproduct_related', 'woocommerce_output_related_products', 20 );
			?>
			</div>
		</div>
		<?php endwhile; // end of the loop. ?>
	</div>
</div>
