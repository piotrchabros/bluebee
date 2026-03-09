<?php
/**
 * Title: Hero — Full Screen
 * Slug: bluebee/hero
 * Description: Full-screen hero section with animated headline, subtext, and dual CTAs.
 * Categories: bluebee-sections
 * Keywords: hero, banner, headline, marketing
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-hero bb-section","id":"home","style":{"color":{"background":"#F7F4EF"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bb-hero bb-section" id="home" style="background-color:#F7F4EF;padding:0;margin-top:0">

	<!-- wp:group {"className":"bb-hero__inner bb-container","style":{"spacing":{"padding":{"top":"10vh","bottom":"10vh","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
	<div class="wp-block-group bb-hero__inner bb-container" style="padding:10vh var(--wp--preset--spacing--60)">

		<!-- wp:paragraph {"className":"bb-hero__eyebrow bb-animate","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.18em","textTransform":"uppercase"},"color":{"text":"#1B45E8"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
		<p class="bb-hero__eyebrow bb-animate" style="font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:#1B45E8;margin-bottom:2rem"><?php echo esc_html__( 'Marketing Agency · Est. 2012', 'bluebee' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- The JS will split the last word into .bb-hero__word-cycle for the typing animation -->
		<!-- wp:heading {"level":1,"className":"bb-hero__heading bb-animate bb-animate--delay-1","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"800","fontSize":"clamp(3.5rem,8.5vw,7.5rem)","lineHeight":"0.93","letterSpacing":"-0.035em"},"spacing":{"margin":{"bottom":"3rem"}}}} -->
		<h1 class="wp-block-heading bb-hero__heading bb-animate bb-animate--delay-1" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(3.5rem,8.5vw,7.5rem);font-weight:800;line-height:0.93;letter-spacing:-0.035em;margin-bottom:3rem"><?php echo esc_html__( 'We Make Brands Unforgettable', 'bluebee' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:columns {"className":"bb-hero__bottom bb-animate bb-animate--delay-2","style":{"spacing":{"blockGap":"4rem"}}} -->
		<div class="wp-block-columns bb-hero__bottom bb-animate bb-animate--delay-2">

			<!-- wp:column {"width":"55%"} -->
			<div class="wp-block-column" style="flex-basis:55%">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.65"},"color":{"text":"#6B6963"},"spacing":{"margin":{"bottom":"2.5rem"}}}} -->
				<p style="font-size:1.2rem;line-height:1.65;color:#6B6963;margin-bottom:2.5rem"><?php echo esc_html__( 'We partner with ambitious companies to build bold strategies, distinctive brand identities, and campaigns that move markets. No fluff — just results that stick.', 'bluebee' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"blockGap":"1rem"}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bb-btn-primary bb-magnetic","style":{"color":{"background":"#0C0C0A","text":"#F7F4EF"},"border":{"radius":"0px"},"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem","left":"2.75rem","right":"2.75rem"}}}} -->
					<div class="wp-block-button bb-btn-primary bb-magnetic"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#work" style="background-color:#0C0C0A;color:#F7F4EF;border-radius:0;padding:1.1rem 2.75rem"><?php echo esc_html__( 'View Our Work', 'bluebee' ); ?></a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"bb-btn-ghost bb-magnetic is-style-outline","style":{"color":{"text":"#0C0C0A"},"border":{"radius":"0px","width":"1.5px","color":"#0C0C0A","style":"solid"},"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem","left":"2.75rem","right":"2.75rem"}}}} -->
					<div class="wp-block-button bb-btn-ghost bb-magnetic is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#contact" style="color:#0C0C0A;border-radius:0;border:1.5px solid #0C0C0A;padding:1.1rem 2.75rem"><?php echo esc_html__( 'Start a Project', 'bluebee' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"45%","className":"bb-hero__stats"} -->
			<div class="wp-block-column bb-hero__stats" style="flex-basis:45%">

				<!-- wp:html -->
				<div class="bb-stat-row" style="border-top:1px solid #E2DED8;padding:1.5rem 0">
					<p class="bb-stat-number" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(2.5rem,4vw,3.5rem);font-weight:800;line-height:1;letter-spacing:-0.025em"><span class="bb-counter" data-target="200">0</span>+</p>
					<p class="bb-stat-label" style="font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:#6B6963;margin-top:0.4rem"><?php echo esc_html__( 'Clients Worldwide', 'bluebee' ); ?></p>
				</div>
				<div class="bb-stat-row" style="border-top:1px solid #E2DED8;padding:1.5rem 0">
					<p class="bb-stat-number" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(2.5rem,4vw,3.5rem);font-weight:800;line-height:1;letter-spacing:-0.025em"><span class="bb-counter" data-target="12">0</span></p>
					<p class="bb-stat-label" style="font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:#6B6963;margin-top:0.4rem"><?php echo esc_html__( 'Years of Experience', 'bluebee' ); ?></p>
				</div>
				<div class="bb-stat-row" style="border-top:1px solid #E2DED8;border-bottom:1px solid #E2DED8;padding:1.5rem 0">
					<p class="bb-stat-number" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(2.5rem,4vw,3.5rem);font-weight:800;line-height:1;letter-spacing:-0.025em"><span class="bb-counter" data-target="98">0</span>%</p>
					<p class="bb-stat-label" style="font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:#6B6963;margin-top:0.4rem"><?php echo esc_html__( 'Client Retention Rate', 'bluebee' ); ?></p>
				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="bb-hero__scroll-indicator" style="display:flex;justify-content:center;padding-bottom:2.5rem">
		<div class="bb-scroll-line" aria-hidden="true"></div>
	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
