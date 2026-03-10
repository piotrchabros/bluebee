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

					<!-- wp:group {"className":"bb-testimonial-card__author","layout":{"type":"default"}} -->
					<div class="wp-block-group bb-testimonial-card__author">
						<!-- wp:post-meta {"fieldName":"_bb_author_name","showLabel":false,"className":"bb-testimonial-card__name"} /-->
						<!-- wp:post-meta {"fieldName":"_bb_author_title","showLabel":false,"className":"bb-testimonial-card__role"} /-->
						<!-- wp:post-meta {"fieldName":"_bb_author_company","showLabel":false,"className":"bb-testimonial-card__company"} /-->
					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->

			</article>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<?php
		$fallback_testimonials = array(
			array(
				'quote'   => __( 'Bluebee transformed how our audience sees us. The rebrand drove a 60% increase in brand recall within three months of launch — results we never thought possible.', 'bluebee' ),
				'name'    => __( 'Sarah Mitchell', 'bluebee' ),
				'role'    => __( 'Chief Marketing Officer, Nova Skincare', 'bluebee' ),
				'initial' => 'S',
			),
			array(
				'quote'   => __( 'The team\'s strategic thinking is unmatched. They don\'t just execute — they challenge your assumptions and push your brand further than you thought you could go.', 'bluebee' ),
				'name'    => __( 'James Park', 'bluebee' ),
				'role'    => __( 'Founder & CEO, Vault Technologies', 'bluebee' ),
				'initial' => 'J',
			),
			array(
				'quote'   => __( 'Working with Bluebee was the best decision we made all year. Our digital campaigns are now generating 3× the ROI of anything we ran before. Exceptional.', 'bluebee' ),
				'name'    => __( 'Elena Torres', 'bluebee' ),
				'role'    => __( 'VP of Growth, Bloom Health', 'bluebee' ),
				'initial' => 'E',
			),
		);
		$delay_classes = array( 'bb-animate--delay-1', 'bb-animate--delay-2', 'bb-animate--delay-3' );

		echo "\n\t\t<!-- wp:group {\"className\":\"bb-testimonials__grid\",\"layout\":{\"type\":\"grid\",\"columnCount\":3}} -->";
		echo "\n\t\t<div class=\"wp-block-group bb-testimonials__grid\">";

		foreach ( $fallback_testimonials as $idx => $t ) :
			$delay    = isset( $delay_classes[ $idx ] ) ? ' ' . $delay_classes[ $idx ] : '';
			$card_cls = 'bb-testimonial-card bb-animate' . $delay;
			$quote    = esc_html( $t['quote'] );
			$name     = esc_html( $t['name'] );
			$role     = esc_html( $t['role'] );
			$initial  = esc_html( $t['initial'] );

			echo "\n\t\t\t<!-- wp:group {\"tagName\":\"article\",\"className\":\"" . esc_attr( $card_cls ) . "\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"2.5rem\",\"bottom\":\"2.5rem\",\"left\":\"2.5rem\",\"right\":\"2.5rem\"}}},\"layout\":{\"type\":\"default\"}} -->";
			echo "\n\t\t\t<article class=\"wp-block-group " . esc_attr( $card_cls ) . "\" style=\"padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem\">";

			echo "\n\t\t\t\t<!-- wp:paragraph {\"className\":\"bb-testimonial-card__quote\"} -->";
			echo "\n\t\t\t\t<p class=\"wp-block-paragraph bb-testimonial-card__quote\">" . $quote . "</p>";
			echo "\n\t\t\t\t<!-- /wp:paragraph -->";

			echo "\n\t\t\t\t<!-- wp:group {\"className\":\"bb-testimonial-card__footer\",\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\",\"verticalAlignment\":\"center\"}} -->";
			echo "\n\t\t\t\t<div class=\"wp-block-group bb-testimonial-card__footer\">";

			echo "\n\t\t\t\t\t<!-- wp:paragraph {\"className\":\"bb-testimonial-card__avatar bb-testimonial-card__avatar--initials\"} -->";
			echo "\n\t\t\t\t\t<p class=\"wp-block-paragraph bb-testimonial-card__avatar bb-testimonial-card__avatar--initials\" aria-hidden=\"true\">" . $initial . "</p>";
			echo "\n\t\t\t\t\t<!-- /wp:paragraph -->";

			echo "\n\t\t\t\t\t<!-- wp:group {\"className\":\"bb-testimonial-card__author\",\"layout\":{\"type\":\"default\"}} -->";
			echo "\n\t\t\t\t\t<div class=\"wp-block-group bb-testimonial-card__author\">";
			echo "\n\t\t\t\t\t\t<!-- wp:paragraph {\"className\":\"bb-testimonial-card__name\"} -->";
			echo "\n\t\t\t\t\t\t<p class=\"wp-block-paragraph bb-testimonial-card__name\"><strong>" . $name . "</strong></p>";
			echo "\n\t\t\t\t\t\t<!-- /wp:paragraph -->";
			echo "\n\t\t\t\t\t\t<!-- wp:paragraph {\"className\":\"bb-testimonial-card__role\"} -->";
			echo "\n\t\t\t\t\t\t<p class=\"wp-block-paragraph bb-testimonial-card__role\">" . $role . "</p>";
			echo "\n\t\t\t\t\t\t<!-- /wp:paragraph -->";
			echo "\n\t\t\t\t\t</div>";
			echo "\n\t\t\t\t\t<!-- /wp:group -->";

			echo "\n\t\t\t\t</div>";
			echo "\n\t\t\t\t<!-- /wp:group -->";

			echo "\n\t\t\t</article>";
			echo "\n\t\t\t<!-- /wp:group -->";
		endforeach;

		echo "\n\t\t</div>";
		echo "\n\t\t<!-- /wp:group -->";
		?>
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</section>
<!-- /wp:group -->
