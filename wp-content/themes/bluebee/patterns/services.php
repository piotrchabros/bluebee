<?php
/**
 * Title: Services — Grid
 * Slug: bluebee/services
 * Description: Four-column services grid pulled from the Services CPT with hover effects.
 * Categories: bluebee-sections
 * Keywords: services, offerings, what we do
 */

// Query live Service posts.
$service_query = new WP_Query( array(
	'post_type'      => 'bb_service',
	'posts_per_page' => 8,
	'post_status'    => 'publish',
	'orderby'        => array( 'meta_value_num' => 'ASC', 'date' => 'DESC' ),
	'meta_key'       => '_bb_order',
	'no_found_rows'  => true,
) );

$services = array();

if ( $service_query->have_posts() ) {
	$n = 1;
	while ( $service_query->have_posts() ) {
		$service_query->the_post();
		$services[] = array(
			'icon'  => get_post_meta( get_the_ID(), '_bb_icon', true ) ?: '◎',
			'title' => get_the_title(),
			'text'  => has_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 28, '…' ),
			'num'   => sprintf( '%02d', $n++ ),
			'link'  => get_permalink(),
		);
	}
	wp_reset_postdata();
}

// Static fallbacks shown until the admin creates Service posts.
if ( empty( $services ) ) {
	$services = array(
		array(
			'icon'  => '◎',
			'title' => __( 'Brand Strategy', 'bluebee' ),
			'text'  => __( 'We develop sharp positioning, clear messaging hierarchies, and brand architectures that give your business a competitive edge in any market.', 'bluebee' ),
			'num'   => '01',
			'link'  => '#services',
		),
		array(
			'icon'  => '◈',
			'title' => __( 'Creative Direction', 'bluebee' ),
			'text'  => __( 'From visual identities to campaign concepts, we craft distinctive aesthetics that resonate with audiences and make brands impossible to ignore.', 'bluebee' ),
			'num'   => '02',
			'link'  => '#services',
		),
		array(
			'icon'  => '◇',
			'title' => __( 'Digital Marketing', 'bluebee' ),
			'text'  => __( 'Data-informed campaigns across every digital channel — from paid search and social to email and influencer — optimised for reach and conversion.', 'bluebee' ),
			'num'   => '03',
			'link'  => '#services',
		),
		array(
			'icon'  => '◉',
			'title' => __( 'Performance Media', 'bluebee' ),
			'text'  => __( 'We turn ad spend into measurable growth. Our media team manages budgets with rigorous testing, attribution, and continuous performance refinement.', 'bluebee' ),
			'num'   => '04',
			'link'  => '#services',
		),
	);
}

$cols = min( count( $services ), 4 );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-services bb-section","anchor":"services","style":{"color":{"background":"var:preset|color|cream"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<section class="wp-block-group alignfull bb-services bb-section has-background" id="services" style="background-color:var(--wp--preset--color--cream);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:group {"className":"bb-section__header bb-animate","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group bb-section__header bb-animate" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.18em","textTransform":"uppercase"},"color":{"text":"var:preset|color|blue"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
			<p class="has-text-color" style="font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--wp--preset--color--blue);margin-bottom:0.75rem"><?php echo esc_html__( 'What We Do', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"800","fontSize":"clamp(2.5rem,5vw,4rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(2.5rem,5vw,4rem);font-weight:800;line-height:0.95;letter-spacing:-0.03em"><?php echo esc_html__( 'Services that move markets', 'bluebee' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"layout":{"type":"constrained","wideSize":"34ch"},"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.65"},"color":{"text":"var:preset|color|gray"}}} -->
			<p class="has-text-color" style="font-size:1rem;line-height:1.65;color:var(--wp--preset--color--gray)"><?php echo esc_html__( 'End-to-end brand and marketing solutions built for growth-oriented businesses.', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="bb-services__grid" style="display:grid;grid-template-columns:repeat(<?php echo esc_attr( $cols ); ?>,1fr);gap:0">
		<?php foreach ( $services as $i => $svc ) : ?>
		<div class="bb-service-card bb-animate" style="--bb-delay:<?php echo $i * 0.1; ?>s;padding:2.5rem 2rem;border-left:1px solid var(--wp--preset--color--border);position:relative">
			<div style="display:flex;justify-content:space-between;margin-bottom:2rem">
				<span style="font-size:1.5rem;line-height:1" aria-hidden="true"><?php echo esc_html( $svc['icon'] ); ?></span>
				<span style="font-family:var(--wp--preset--font-family--heading);font-size:0.7rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:#C8C5BF"><?php echo esc_html( $svc['num'] ); ?></span>
			</div>
			<h3 style="font-family:var(--wp--preset--font-family--heading);font-size:1.2rem;font-weight:700;line-height:1.2;letter-spacing:-0.01em;margin-bottom:1rem"><?php echo esc_html( $svc['title'] ); ?></h3>
			<p style="font-size:0.9rem;line-height:1.7;color:var(--wp--preset--color--gray)"><?php echo esc_html( $svc['text'] ); ?></p>
			<p style="margin-top:2rem">
				<a href="<?php echo esc_url( $svc['link'] ); ?>" style="font-family:var(--wp--preset--font-family--heading);font-size:0.75rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:var(--wp--preset--color--blue);text-decoration:none">
					<?php echo esc_html__( 'Learn More →', 'bluebee' ); ?>
				</a>
			</p>
		</div>
		<?php endforeach; ?>
	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
