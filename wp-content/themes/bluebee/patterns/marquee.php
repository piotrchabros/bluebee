<?php
/**
 * Title: Marquee — Scrolling Text Band
 * Slug: bluebee/marquee
 * Description: Infinite horizontal scrolling text strip with services/keywords.
 * Categories: bluebee-sections
 * Keywords: marquee, ticker, scroll, band
 */
$keywords = array(
	__( 'Brand Strategy', 'bluebee' ),
	__( 'Creative Direction', 'bluebee' ),
	__( 'Digital Marketing', 'bluebee' ),
	__( 'Performance Media', 'bluebee' ),
	__( 'Content Creation', 'bluebee' ),
	__( 'Web Design', 'bluebee' ),
	__( 'Social Media', 'bluebee' ),
	__( 'SEO & Analytics', 'bluebee' ),
);
$star = '<span class="bb-marquee__star" aria-hidden="true">✦</span>';
$inner = '';
foreach ( $keywords as $kw ) {
	$inner .= '<span class="bb-marquee__item">' . esc_html( $kw ) . '</span>' . $star;
}
// Duplicate for seamless loop
$track = $inner . $inner;
?>
<!-- wp:html -->
<section class="bb-marquee bb-section" aria-label="<?php echo esc_attr__( 'Services', 'bluebee' ); ?>" style="overflow:hidden;border-top:1px solid #E2DED8;border-bottom:1px solid #E2DED8;background:#FFFFFF;padding:1.25rem 0">
	<div class="bb-marquee__track" aria-hidden="true">
		<?php echo $track; // Already escaped above ?>
	</div>
</section>
<!-- /wp:html -->
