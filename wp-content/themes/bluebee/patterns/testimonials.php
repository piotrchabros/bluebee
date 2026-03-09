<?php
/**
 * Title: Testimonials — Client Quotes
 * Slug: bluebee/testimonials
 * Description: Testimonials section pulling from the Testimonial CPT with static fallbacks.
 * Categories: bluebee-sections
 * Keywords: testimonials, reviews, quotes, clients
 */
$testimonials = array();

// Prefer live CPT data
$tq = new WP_Query( array(
	'post_type'      => 'bb_testimonial',
	'posts_per_page' => 3,
	'post_status'    => 'publish',
) );

if ( $tq->have_posts() ) {
	while ( $tq->have_posts() ) {
		$tq->the_post();
		$testimonials[] = array(
			'quote'   => get_the_content(),
			'name'    => get_post_meta( get_the_ID(), '_bb_author_name', true )    ?: get_the_title(),
			'title'   => get_post_meta( get_the_ID(), '_bb_author_title', true )   ?: '',
			'company' => get_post_meta( get_the_ID(), '_bb_author_company', true ) ?: '',
			'avatar'  => get_the_post_thumbnail_url( get_the_ID(), array( 64, 64 ) ),
		);
	}
	wp_reset_postdata();
} else {
	// Placeholder testimonials
	$testimonials = array(
		array(
			'quote'   => __( 'Bluebee transformed how our audience sees us. The rebrand drove a 60% increase in brand recall within three months of launch — results we never thought possible.', 'bluebee' ),
			'name'    => __( 'Sarah Mitchell', 'bluebee' ),
			'title'   => __( 'Chief Marketing Officer', 'bluebee' ),
			'company' => __( 'Nova Skincare', 'bluebee' ),
			'avatar'  => '',
		),
		array(
			'quote'   => __( 'The team\'s strategic thinking is unmatched. They don\'t just execute — they challenge your assumptions and push your brand further than you thought you could go.', 'bluebee' ),
			'name'    => __( 'James Park', 'bluebee' ),
			'title'   => __( 'Founder & CEO', 'bluebee' ),
			'company' => __( 'Vault Technologies', 'bluebee' ),
			'avatar'  => '',
		),
		array(
			'quote'   => __( 'Working with Bluebee was the best decision we made all year. Our digital campaigns are now generating 3× the ROI of anything we ran before. Exceptional.', 'bluebee' ),
			'name'    => __( 'Elena Torres', 'bluebee' ),
			'title'   => __( 'VP of Growth', 'bluebee' ),
			'company' => __( 'Bloom Health', 'bluebee' ),
			'avatar'  => '',
		),
	);
}
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-testimonials bb-section","id":"clients","style":{"color":{"background":"#F7F4EF"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<section class="wp-block-group alignfull bb-testimonials bb-section" id="clients" style="background-color:#F7F4EF;padding:var(--wp--preset--spacing--80) var(--wp--preset--spacing--60)">

	<!-- wp:group {"className":"bb-section__header bb-animate","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group bb-section__header bb-animate" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.18em","textTransform":"uppercase"},"color":{"text":"#1B45E8"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:#1B45E8;margin-bottom:0.75rem"><?php echo esc_html__( 'Client Love', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"800","fontSize":"clamp(2.5rem,5vw,4rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(2.5rem,5vw,4rem);font-weight:800;line-height:0.95;letter-spacing:-0.03em"><?php echo esc_html__( 'What they say', 'bluebee' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="bb-testimonials__grid">
		<?php foreach ( $testimonials as $idx => $t ) : ?>
		<blockquote class="bb-testimonial-card bb-animate bb-animate--delay-<?php echo $idx + 1; ?>">
			<p class="bb-testimonial-card__quote"><?php echo esc_html( $t['quote'] ); ?></p>
			<footer class="bb-testimonial-card__footer">
				<?php if ( $t['avatar'] ) : ?>
				<img src="<?php echo esc_url( $t['avatar'] ); ?>" alt="<?php echo esc_attr( $t['name'] ); ?>" width="40" height="40" class="bb-testimonial-card__avatar" loading="lazy" />
				<?php else : ?>
				<div class="bb-testimonial-card__avatar bb-testimonial-card__avatar--initials" aria-hidden="true">
					<?php echo esc_html( mb_substr( $t['name'], 0, 1 ) ); ?>
				</div>
				<?php endif; ?>
				<div class="bb-testimonial-card__author">
					<strong><?php echo esc_html( $t['name'] ); ?></strong>
					<?php if ( $t['title'] || $t['company'] ) : ?>
					<span><?php echo esc_html( implode( ', ', array_filter( array( $t['title'], $t['company'] ) ) ) ); ?></span>
					<?php endif; ?>
				</div>
			</footer>
		</blockquote>
		<?php endforeach; ?>
	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
