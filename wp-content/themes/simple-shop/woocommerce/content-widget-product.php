<?php
/**
 * The template for displaying product widget entries
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

// Bail if accessed directly
if ( ! defined( 'ABSPATH' ) )
	exit;

	global $product;
?>

<li class="block-3 <?php echo ( ! has_post_thumbnail() ) ? 'has-image-placeholder' : false; ?>">
	<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
		<section class="product">
			<figure class="product-thumb">
				<?php echo $product->get_image( 'simple-shop-425x280' ); ?>
			</figure>

			<section class="product-info cf">
				<h2><?php echo $product->get_name(); ?></h2>

				<?php
					if ( ! empty( $show_rating ) ) :
						echo wc_get_rating_html( $product->get_average_rating() );
					endif;
				?>

				<p class="amount"><?php echo $product->get_price_html(); ?></p>
			</section>
		</section>
	</a>
</li>