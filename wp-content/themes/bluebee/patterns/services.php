<?php
/**
 * Title: Services — Grid
 * Slug: bluebee/services
 * Description: A four-column services grid with hover effects.
 * Categories: bluebee-sections
 * Keywords: services, offerings, what we do
 */
$services = array(
	array(
		'icon'  => '◎',
		'title' => __( 'Brand Strategy', 'bluebee' ),
		'text'  => __( 'We develop sharp positioning, clear messaging hierarchies, and brand architectures that give your business a competitive edge in any market.', 'bluebee' ),
		'num'   => '01',
	),
	array(
		'icon'  => '◈',
		'title' => __( 'Creative Direction', 'bluebee' ),
		'text'  => __( 'From visual identities to campaign concepts, we craft distinctive aesthetics that resonate with audiences and make brands impossible to ignore.', 'bluebee' ),
		'num'   => '02',
	),
	array(
		'icon'  => '◇',
		'title' => __( 'Digital Marketing', 'bluebee' ),
		'text'  => __( 'Data-informed campaigns across every digital channel — from paid search and social to email and influencer — optimised for reach and conversion.', 'bluebee' ),
		'num'   => '03',
	),
	array(
		'icon'  => '◉',
		'title' => __( 'Performance Media', 'bluebee' ),
		'text'  => __( 'We turn ad spend into measurable growth. Our media team manages budgets with rigorous testing, attribution, and continuous performance refinement.', 'bluebee' ),
		'num'   => '04',
	),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-services bb-section","id":"services","style":{"color":{"background":"#F7F4EF"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<section class="wp-block-group alignfull bb-services bb-section" id="services" style="background-color:#F7F4EF;padding:var(--wp--preset--spacing--80) var(--wp--preset--spacing--60)">

	<!-- wp:group {"className":"bb-section__header bb-animate","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group bb-section__header bb-animate" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.18em","textTransform":"uppercase"},"color":{"text":"#1B45E8"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:#1B45E8;margin-bottom:0.75rem"><?php echo esc_html__( 'What We Do', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"800","fontSize":"clamp(2.5rem,5vw,4rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(2.5rem,5vw,4rem);font-weight:800;line-height:0.95;letter-spacing:-0.03em"><?php echo esc_html__( 'Services that move markets', 'bluebee' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.65"},"color":{"text":"#6B6963"},"layout":{"selfStretch":"fixed","flexSize":"34ch"}}} -->
		<p style="font-size:1rem;line-height:1.65;color:#6B6963;max-width:34ch"><?php echo esc_html__( 'End-to-end brand and marketing solutions built for growth-oriented businesses.', 'bluebee' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"bb-services__grid","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":4}} -->
	<div class="wp-block-group bb-services__grid" style="display:grid;grid-template-columns:repeat(4,1fr)">
		<?php foreach ( $services as $i => $svc ) : ?>
		<!-- wp:group {"className":"bb-service-card bb-animate bb-animate--delay-<?php echo $i + 1; ?>","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2rem","right":"2rem"}},"border":{"left":{"color":"#E2DED8","width":"1px"}}}} -->
		<div class="wp-block-group bb-service-card bb-animate bb-animate--delay-<?php echo $i + 1; ?>" style="padding:2.5rem 2rem;border-left:1px solid #E2DED8">
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group" style="margin-bottom:2rem;display:flex;justify-content:space-between">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","lineHeight":"1"}}} -->
				<p style="font-size:1.5rem;line-height:1"><?php echo esc_html( $svc['icon'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"0.7rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"#C8C5BF"}}} -->
				<p style="font-family:var(--wp--preset--font-family--heading);font-size:0.7rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:#C8C5BF"><?php echo esc_html( $svc['num'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"700","fontSize":"1.2rem","lineHeight":"1.2","letterSpacing":"-0.01em"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
			<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--heading);font-size:1.2rem;font-weight:700;line-height:1.2;letter-spacing:-0.01em;margin-bottom:1rem"><?php echo esc_html( $svc['title'] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.7"},"color":{"text":"#6B6963"}}} -->
			<p style="font-size:0.9rem;line-height:1.7;color:#6B6963"><?php echo esc_html( $svc['text'] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"bb-service-card__link","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"600","fontSize":"0.75rem","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#1B45E8"},"spacing":{"margin":{"top":"2rem"}}}} -->
			<p class="bb-service-card__link" style="font-family:var(--wp--preset--font-family--heading);font-size:0.75rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:#1B45E8;margin-top:2rem"><a href="#contact" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Learn More →', 'bluebee' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
