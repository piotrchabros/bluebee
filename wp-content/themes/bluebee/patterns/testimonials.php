<?php
/**
 * Title: Testimonials — Client Quotes
 * Slug: bluebee/testimonials
 * Description: Testimonials section pulling from the Testimonial CPT with static fallbacks.
 * Categories: bluebee-sections
 * Keywords: testimonials, reviews, quotes, clients
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-testimonials bb-section","anchor":"clients","style":{"color":{"background":"var:preset|color|cream"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<section class="wp-block-group alignfull bb-testimonials bb-section has-background" id="clients" style="background-color:var(--wp--preset--color--cream);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:group {"className":"bb-section__header bb-animate","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group bb-section__header bb-animate" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.18em","textTransform":"uppercase"},"color":{"text":"var:preset|color|blue"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
			<p class="has-text-color" style="font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--wp--preset--color--blue);margin-bottom:0.75rem"><?php echo esc_html__( 'Client Love', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"800","fontSize":"clamp(2.5rem,5vw,4rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
			<h2 class="wp-block-heading" style="font-size:clamp(2.5rem,5vw,4rem);font-weight:800;line-height:0.95;letter-spacing:-0.03em"><?php echo esc_html__( 'What they say', 'bluebee' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":11,"query":{"postType":"bb_testimonial","perPage":3,"orderBy":"date","order":"desc","inherit":false},"className":"bb-testimonials-query"} -->
	<div class="wp-block-query bb-testimonials-query">

		<!-- wp:post-template {"className":"bb-testimonials__grid","layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group {"tagName":"article","className":"bb-testimonial-card bb-animate","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"}}},"layout":{"type":"default"}} -->
			<article class="wp-block-group bb-testimonial-card bb-animate" style="padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">

				<!-- wp:post-excerpt {"className":"bb-testimonial-card__quote","showMoreOnNewLine":false,"moreText":""} /-->

				<!-- wp:group {"className":"bb-testimonial-card__footer","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","style":{"spacing":{"blockGap":"1rem"}}}} -->
				<div class="wp-block-group bb-testimonial-card__footer">

					<!-- wp:post-featured-image {"isLink":false,"width":"40px","height":"40px","className":"bb-testimonial-card__avatar","style":{"border":{"radius":"50%"}}} /-->

					<!-- wp:bluebee/testimonial-author /-->

				</div>
				<!-- /wp:group -->

			</article>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->

			<!-- wp:group {"className":"bb-testimonials__grid","layout":{"type":"grid","columnCount":3}} -->
			<div class="wp-block-group bb-testimonials__grid is-layout-grid">

				<!-- wp:group {"tagName":"article","className":"bb-testimonial-card bb-animate bb-animate--delay-1","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"}}},"layout":{"type":"default"}} -->
				<article class="wp-block-group bb-testimonial-card bb-animate bb-animate--delay-1" style="padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">

					<!-- wp:paragraph {"className":"bb-testimonial-card__quote"} -->
					<p class="wp-block-paragraph bb-testimonial-card__quote"><?php echo esc_html__( 'Bluebee transformed how our audience sees us. The rebrand drove a 60% increase in brand recall within three months of launch — results we never thought possible.', 'bluebee' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"bb-testimonial-card__footer","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group bb-testimonial-card__footer">

						<!-- wp:paragraph {"className":"bb-testimonial-card__avatar bb-testimonial-card__avatar--initials"} -->
						<p class="wp-block-paragraph bb-testimonial-card__avatar bb-testimonial-card__avatar--initials" aria-hidden="true">S</p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"className":"bb-testimonial-card__author","layout":{"type":"default"}} -->
						<div class="wp-block-group bb-testimonial-card__author">
							<!-- wp:paragraph {"className":"bb-testimonial-card__name"} -->
							<p class="wp-block-paragraph bb-testimonial-card__name"><strong><?php echo esc_html__( 'Sarah Mitchell', 'bluebee' ); ?></strong></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"bb-testimonial-card__role"} -->
							<p class="wp-block-paragraph bb-testimonial-card__role"><?php echo esc_html__( 'Chief Marketing Officer, Nova Skincare', 'bluebee' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				</article>
				<!-- /wp:group -->

				<!-- wp:group {"tagName":"article","className":"bb-testimonial-card bb-animate bb-animate--delay-2","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"}}},"layout":{"type":"default"}} -->
				<article class="wp-block-group bb-testimonial-card bb-animate bb-animate--delay-2" style="padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">

					<!-- wp:paragraph {"className":"bb-testimonial-card__quote"} -->
					<p class="wp-block-paragraph bb-testimonial-card__quote"><?php echo esc_html__( 'The team\'s strategic thinking is unmatched. They don\'t just execute — they challenge your assumptions and push your brand further than you thought you could go.', 'bluebee' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"bb-testimonial-card__footer","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group bb-testimonial-card__footer">

						<!-- wp:paragraph {"className":"bb-testimonial-card__avatar bb-testimonial-card__avatar--initials"} -->
						<p class="wp-block-paragraph bb-testimonial-card__avatar bb-testimonial-card__avatar--initials" aria-hidden="true">J</p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"className":"bb-testimonial-card__author","layout":{"type":"default"}} -->
						<div class="wp-block-group bb-testimonial-card__author">
							<!-- wp:paragraph {"className":"bb-testimonial-card__name"} -->
							<p class="wp-block-paragraph bb-testimonial-card__name"><strong><?php echo esc_html__( 'James Park', 'bluebee' ); ?></strong></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"bb-testimonial-card__role"} -->
							<p class="wp-block-paragraph bb-testimonial-card__role"><?php echo esc_html__( 'Founder & CEO, Vault Technologies', 'bluebee' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				</article>
				<!-- /wp:group -->

				<!-- wp:group {"tagName":"article","className":"bb-testimonial-card bb-animate bb-animate--delay-3","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"}}},"layout":{"type":"default"}} -->
				<article class="wp-block-group bb-testimonial-card bb-animate bb-animate--delay-3" style="padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">

					<!-- wp:paragraph {"className":"bb-testimonial-card__quote"} -->
					<p class="wp-block-paragraph bb-testimonial-card__quote"><?php echo esc_html__( 'Working with Bluebee was the best decision we made all year. Our digital campaigns are now generating 3× the ROI of anything we ran before. Exceptional.', 'bluebee' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"className":"bb-testimonial-card__footer","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group bb-testimonial-card__footer">

						<!-- wp:paragraph {"className":"bb-testimonial-card__avatar bb-testimonial-card__avatar--initials"} -->
						<p class="wp-block-paragraph bb-testimonial-card__avatar bb-testimonial-card__avatar--initials" aria-hidden="true">E</p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"className":"bb-testimonial-card__author","layout":{"type":"default"}} -->
						<div class="wp-block-group bb-testimonial-card__author">
							<!-- wp:paragraph {"className":"bb-testimonial-card__name"} -->
							<p class="wp-block-paragraph bb-testimonial-card__name"><strong><?php echo esc_html__( 'Elena Torres', 'bluebee' ); ?></strong></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"bb-testimonial-card__role"} -->
							<p class="wp-block-paragraph bb-testimonial-card__role"><?php echo esc_html__( 'VP of Growth, Bloom Health', 'bluebee' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				</article>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</section>
<!-- /wp:group -->
