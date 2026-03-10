<?php
/**
 * Title: Hero — Full Screen
 * Slug: bluebee/hero
 * Description: Full-screen hero section with animated headline, subtext, and dual CTAs.
 * Categories: bluebee-sections
 * Keywords: hero, banner, headline, marketing
 */
?>
<!-- wp:group {"tagName":"section","anchor":"home","align":"full","className":"bb-hero bb-section","style":{"color":{"background":"var:preset|color|cream"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bb-hero bb-section has-background" id="home" style="background-color:var(--wp--preset--color--cream);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;margin-top:0">

	<!-- wp:group {"className":"bb-hero__inner","style":{"spacing":{"padding":{"top":"10vh","right":"var:preset|spacing|60","bottom":"10vh","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
	<div class="wp-block-group bb-hero__inner" style="padding-top:10vh;padding-right:var(--wp--preset--spacing--60);padding-bottom:10vh;padding-left:var(--wp--preset--spacing--60)">

		<!-- wp:paragraph {"className":"bb-hero__eyebrow bb-animate","style":{"typography":{"fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.18em","textTransform":"uppercase"},"color":{"text":"var:preset|color|blue"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
		<p class="bb-hero__eyebrow bb-animate has-text-color" style="font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--wp--preset--color--blue);margin-bottom:2rem"><?php echo esc_html__( 'Marketing Agency · Est. 2012', 'bluebee' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"bb-hero__heading bb-animate bb-animate--delay-1","style":{"typography":{"fontWeight":"800","fontSize":"clamp(3.5rem,8.5vw,7.5rem)","lineHeight":"0.93","letterSpacing":"-0.035em"},"spacing":{"margin":{"top":"0","bottom":"3rem"}}}} -->
		<h1 class="wp-block-heading bb-hero__heading bb-animate bb-animate--delay-1" style="font-size:clamp(3.5rem,8.5vw,7.5rem);font-weight:800;line-height:0.93;letter-spacing:-0.035em;margin-top:0;margin-bottom:3rem"><?php echo esc_html__( 'We Make Brands Unforgettable', 'bluebee' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:columns {"className":"bb-hero__bottom bb-animate bb-animate--delay-2"} -->
		<div class="wp-block-columns bb-hero__bottom bb-animate bb-animate--delay-2">

			<!-- wp:column {"width":"55%"} -->
			<div class="wp-block-column" style="flex-basis:55%">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.65"},"color":{"text":"var:preset|color|gray"},"spacing":{"margin":{"bottom":"2.5rem"}}}} -->
				<p class="has-text-color" style="font-size:1.2rem;line-height:1.65;color:var(--wp--preset--color--gray);margin-bottom:2.5rem"><?php echo esc_html__( 'We partner with ambitious companies to build bold strategies, distinctive brand identities, and campaigns that move markets. No fluff — just results that stick.', 'bluebee' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"bb-btn-primary bb-magnetic","style":{"color":{"background":"var:preset|color|black","text":"var:preset|color|cream"},"border":{"radius":"0px"},"spacing":{"padding":{"top":"1.1rem","right":"2.75rem","bottom":"1.1rem","left":"2.75rem"}}}} -->
					<div class="wp-block-button bb-btn-primary bb-magnetic"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#work" style="background-color:var(--wp--preset--color--black);color:var(--wp--preset--color--cream);border-radius:0px;padding-top:1.1rem;padding-right:2.75rem;padding-bottom:1.1rem;padding-left:2.75rem"><?php echo esc_html__( 'View Our Work', 'bluebee' ); ?></a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"bb-btn-ghost bb-magnetic","style":{"color":{"text":"var:preset|color|black"},"border":{"radius":"0px","width":"1.5px","color":"var:preset|color|black","style":"solid"},"spacing":{"padding":{"top":"1.1rem","right":"2.75rem","bottom":"1.1rem","left":"2.75rem"}}}} -->
					<div class="wp-block-button bb-btn-ghost bb-magnetic"><a class="wp-block-button__link has-text-color wp-element-button" href="#contact" style="color:var(--wp--preset--color--black);border-radius:0px;border-width:1.5px;border-color:var(--wp--preset--color--black);border-style:solid;padding-top:1.1rem;padding-right:2.75rem;padding-bottom:1.1rem;padding-left:2.75rem"><?php echo esc_html__( 'Start a Project', 'bluebee' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"45%","className":"bb-hero__stats"} -->
			<div class="wp-block-column bb-hero__stats" style="flex-basis:45%">

				<!-- wp:group {"className":"bb-stat-row","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"1.5rem","right":"0","bottom":"1.5rem","left":"0"}}}} -->
				<div class="wp-block-group bb-stat-row" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-top-style:solid;padding-top:1.5rem;padding-right:0;padding-bottom:1.5rem;padding-left:0">
					<!-- wp:paragraph {"className":"bb-stat-number","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2.5rem,4vw,3.5rem)","lineHeight":"1","letterSpacing":"-0.025em"},"spacing":{"margin":{"top":"0","bottom":"0.4rem"}}}} -->
					<p class="bb-stat-number" style="font-size:clamp(2.5rem,4vw,3.5rem);font-weight:800;line-height:1;letter-spacing:-0.025em;margin-top:0;margin-bottom:0.4rem">200+</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"bb-stat-label","style":{"typography":{"fontSize":"0.72rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|gray"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="bb-stat-label has-text-color" style="font-size:0.72rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--gray);margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Clients Worldwide', 'bluebee' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"bb-stat-row","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"1.5rem","right":"0","bottom":"1.5rem","left":"0"}}}} -->
				<div class="wp-block-group bb-stat-row" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-top-style:solid;padding-top:1.5rem;padding-right:0;padding-bottom:1.5rem;padding-left:0">
					<!-- wp:paragraph {"className":"bb-stat-number","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2.5rem,4vw,3.5rem)","lineHeight":"1","letterSpacing":"-0.025em"},"spacing":{"margin":{"top":"0","bottom":"0.4rem"}}}} -->
					<p class="bb-stat-number" style="font-size:clamp(2.5rem,4vw,3.5rem);font-weight:800;line-height:1;letter-spacing:-0.025em;margin-top:0;margin-bottom:0.4rem">12</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"bb-stat-label","style":{"typography":{"fontSize":"0.72rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|gray"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="bb-stat-label has-text-color" style="font-size:0.72rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--gray);margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Years of Experience', 'bluebee' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"bb-stat-row","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"1.5rem","right":"0","bottom":"1.5rem","left":"0"}}}} -->
				<div class="wp-block-group bb-stat-row" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-top-style:solid;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-bottom-style:solid;padding-top:1.5rem;padding-right:0;padding-bottom:1.5rem;padding-left:0">
					<!-- wp:paragraph {"className":"bb-stat-number","style":{"typography":{"fontWeight":"800","fontSize":"clamp(2.5rem,4vw,3.5rem)","lineHeight":"1","letterSpacing":"-0.025em"},"spacing":{"margin":{"top":"0","bottom":"0.4rem"}}}} -->
					<p class="bb-stat-number" style="font-size:clamp(2.5rem,4vw,3.5rem);font-weight:800;line-height:1;letter-spacing:-0.025em;margin-top:0;margin-bottom:0.4rem">98%</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"bb-stat-label","style":{"typography":{"fontSize":"0.72rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|gray"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="bb-stat-label has-text-color" style="font-size:0.72rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--gray);margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Client Retention Rate', 'bluebee' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
