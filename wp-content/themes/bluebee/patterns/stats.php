<?php
/**
 * Title: Stats — Numbers Section
 * Slug: bluebee/stats
 * Description: Horizontal stats band with animated count-up numbers.
 * Categories: bluebee-sections
 * Keywords: stats, numbers, achievements, results
 */
$stats = array(
	array(
		'value'  => '500',
		'suffix' => 'M+',
		'label'  => __( 'Revenue Generated for Clients', 'bluebee' ),
		'prefix' => '$',
	),
	array(
		'value'  => '200',
		'suffix' => '+',
		'label'  => __( 'Brands Transformed', 'bluebee' ),
		'prefix' => '',
	),
	array(
		'value'  => '40',
		'suffix' => '+',
		'label'  => __( 'Industry Awards Won', 'bluebee' ),
		'prefix' => '',
	),
	array(
		'value'  => '98',
		'suffix' => '%',
		'label'  => __( 'Client Satisfaction Score', 'bluebee' ),
		'prefix' => '',
	),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-stats bb-section","style":{"color":{"background":"#0C0C0A","text":"#F7F4EF"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<section class="wp-block-group alignfull bb-stats bb-section" style="background-color:#0C0C0A;color:#F7F4EF;padding:var(--wp--preset--spacing--70) var(--wp--preset--spacing--60)">

	<!-- wp:group {"className":"bb-stats__grid","layout":{"type":"grid","columnCount":4}} -->
	<div class="wp-block-group bb-stats__grid" style="display:grid;grid-template-columns:repeat(4,1fr)">
		<?php foreach ( $stats as $i => $stat ) : ?>
		<!-- wp:group {"className":"bb-stat bb-animate bb-animate--delay-<?php echo $i + 1; ?>","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"0","right":"2rem"}},"border":{"left":{"color":"rgba(255,255,255,0.1)","width":"1px"}}}} -->
		<div class="wp-block-group bb-stat bb-animate bb-animate--delay-<?php echo $i + 1; ?>" style="padding:2rem 2rem 2rem 0;border-left:1px solid rgba(255,255,255,0.1)">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"800","fontSize":"clamp(3rem,5vw,4.5rem)","lineHeight":"0.9","letterSpacing":"-0.03em"},"color":{"text":"#F7F4EF"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(3rem,5vw,4.5rem);font-weight:800;line-height:0.9;letter-spacing:-0.03em;color:#F7F4EF;margin-bottom:1rem">
				<?php echo esc_html( $stat['prefix'] ); ?><span class="bb-counter" data-target="<?php echo esc_attr( $stat['value'] ); ?>">0</span><?php echo esc_html( $stat['suffix'] ); ?>
			</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"0.75rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","lineHeight":"1.4"},"color":{"text":"rgba(247,244,239,0.45)"}}} -->
			<p style="font-family:var(--wp--preset--font-family--heading);font-size:0.75rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;line-height:1.4;color:rgba(247,244,239,0.45)"><?php echo esc_html( $stat['label'] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
