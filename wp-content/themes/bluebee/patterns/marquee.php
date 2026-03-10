<?php
/**
 * Title: Marquee — Scrolling Services Band
 * Slug: bluebee/marquee
 * Description: Infinite horizontal scrolling ticker that pulls titles from the Services CPT.
 * Categories: bluebee-sections
 * Keywords: marquee, ticker, scroll, band, services
 */

// Pull service titles from CPT; fall back to defaults when none exist.
$service_query = new WP_Query( array(
	'post_type'      => 'bb_service',
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'orderby'        => array( 'meta_value_num' => 'ASC', 'date' => 'DESC' ),
	'meta_key'       => '_bb_order',
	'no_found_rows'  => true,
	'fields'         => 'all',
) );

$keywords = array();

if ( $service_query->have_posts() ) {
	while ( $service_query->have_posts() ) {
		$service_query->the_post();
		$keywords[] = get_the_title();
	}
	wp_reset_postdata();
}

// Defaults shown until the admin creates Service posts.
if ( empty( $keywords ) ) {
	$keywords = array(
		__( 'Brand Strategy',     'bluebee' ),
		__( 'Creative Direction', 'bluebee' ),
		__( 'Digital Marketing',  'bluebee' ),
		__( 'Performance Media',  'bluebee' ),
		__( 'Content Creation',   'bluebee' ),
		__( 'Web Design',         'bluebee' ),
		__( 'Social Media',       'bluebee' ),
		__( 'SEO & Analytics',    'bluebee' ),
	);
}

// Generate block markup for each item.
// JS (initMarquee) duplicates the items at runtime for seamless looping.
$items_markup = '';
foreach ( $keywords as $kw ) {
	$items_markup .= "\n\t\t<!-- wp:paragraph {\"className\":\"bb-marquee__item\"} -->";
	$items_markup .= "\n\t\t<p class=\"wp-block-paragraph bb-marquee__item\">" . esc_html( $kw ) . " <span class=\"bb-marquee__star\" aria-hidden=\"true\">\u{2736}</span></p>";
	$items_markup .= "\n\t\t<!-- /wp:paragraph -->";
}
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-marquee bb-section","style":{"color":{"background":"var:preset|color|white"},"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bb-marquee bb-section has-background" style="background-color:var(--wp--preset--color--white);border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-top-style:solid;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-bottom-style:solid;padding-top:1.25rem;padding-bottom:1.25rem;padding-left:0;padding-right:0">

	<!-- wp:group {"className":"bb-marquee__track","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group bb-marquee__track">
		<?php echo $items_markup; ?>
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->