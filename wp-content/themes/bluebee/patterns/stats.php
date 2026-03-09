<?php
/**
 * Title: Stats — Numbers Section
 * Slug: bluebee/stats
 * Description: Horizontal stats band with animated count-up numbers.
 * Categories: bluebee-sections
 * Keywords: stats, numbers, achievements, results
 */
$stats = array(
	array( 'number' => '$500M+', 'label' => __( 'Revenue Generated for Clients', 'bluebee' ) ),
	array( 'number' => '200+',   'label' => __( 'Brands Transformed', 'bluebee' ) ),
	array( 'number' => '40+',    'label' => __( 'Industry Awards Won', 'bluebee' ) ),
	array( 'number' => '98%',    'label' => __( 'Client Satisfaction Score', 'bluebee' ) ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-stats bb-section","style":{"color":{"background":"var:preset|color|black","text":"var:preset|color|cream"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<section class="wp-block-group alignfull bb-stats bb-section has-background has-text-color" style="background-color:var(--wp--preset--color--black);color:var(--wp--preset--color--cream);padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:columns {"className":"bb-stats__grid"} -->
	<div class="wp-block-columns bb-stats__grid">

		<?php foreach ( $stats as $i => $stat ) : ?>
		<!-- wp:column {"className":"bb-stat bb-animate","style":{"border":{"left":{"color":"rgba(255,255,255,0.1)","width":"1px"}},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}}} -->
		<div class="wp-block-column bb-stat bb-animate" style="--bb-delay:<?php echo $i * 0.15; ?>s;border-left-color:rgba(255,255,255,0.1);border-left-width:1px;border-left-style:solid;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

			<!-- wp:paragraph {"className":"bb-stat-number","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"800","fontSize":"clamp(3rem,5vw,4.5rem)","lineHeight":"0.9","letterSpacing":"-0.03em"},"color":{"text":"var:preset|color|cream"},"spacing":{"margin":{"top":"0","bottom":"1rem"}}}} -->
			<p class="bb-stat-number has-text-color" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(3rem,5vw,4.5rem);font-weight:800;line-height:0.9;letter-spacing:-0.03em;color:var(--wp--preset--color--cream);margin-top:0;margin-bottom:1rem"><?php echo esc_html( $stat['number'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"bb-stat-label","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"0.75rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","lineHeight":"1.4"},"color":{"text":"rgba(247,244,239,0.45)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="bb-stat-label has-text-color" style="font-family:var(--wp--preset--font-family--heading);font-size:0.75rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;line-height:1.4;color:rgba(247,244,239,0.45);margin-top:0;margin-bottom:0"><?php echo esc_html( $stat['label'] ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
