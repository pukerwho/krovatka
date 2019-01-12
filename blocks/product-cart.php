<div class="product-img p-relative mb-3">
	<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">	
</div>
<div class="scrollme">
	<div 
    class="animateme"
    data-when="span"
    data-from="1"
    data-to="0"
    data-easing="linear"
    data-translatey="15"
  >
		<div class="product-title text-center mb-3">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
		</div>
	</div>
</div>
<div class="product-price text-center mb-4">
	<?php 
		global $product;
		echo $product->get_price_html(); 
	?>
</div>
<div class="product-button text-center">
	<?php global $product;
		echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
			sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
				esc_url( $product->add_to_cart_url() ),
				esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
				esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
				isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
				esc_html( $product->add_to_cart_text() )
			),
		$product, $args ); 
	?>
</div>