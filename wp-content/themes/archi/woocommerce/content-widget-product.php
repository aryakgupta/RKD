<?php
/**
 * The template for displaying product widget entries
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product; ?>

<li>
	<div class="text">
		<?php echo htmlspecialchars_decode($product->get_image()); ?>
		<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">			
			<span class="product-title"><?php echo $product->get_title(); ?></span>
		</a>
		<?php if ( ! empty( $show_rating ) ) : ?>
			<?php echo htmlspecialchars_decode($product->get_rating_html()); ?>
		<?php endif; ?>
		<div class="price"><?php echo htmlspecialchars_decode($product->get_price_html()); ?></div>
	</div>	
</li>
