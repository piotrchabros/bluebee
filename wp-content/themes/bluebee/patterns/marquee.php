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

$star  = '<span class="bb-marquee__star" aria-hidden="true">✦</span>';
$inner = '';
foreach ( $keywords as $kw ) {
	$inner .= '<span class="bb-marquee__item">' . esc_html( $kw ) . '</span>' . $star;
}
// Duplicate for seamless infinite loop.
$track = $inner . $inner;
?>
<!-- wp:html -->
<section class="bb-marquee bb-section" aria-label="<?php echo esc_attr__( 'Our Services', 'bluebee' ); ?>" style="overflow:hidden;border-top:1px solid #E2DED8;border-bottom:1px solid #E2DED8;background:#FFFFFF;padding:1.25rem 0">
	<div class="bb-marquee__track" aria-hidden="true">
		<?php echo $track; ?>
	</div>
</section>
<!-- /wp:html -->
