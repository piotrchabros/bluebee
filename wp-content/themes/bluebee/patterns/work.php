<?php
/**
 * Title: Work — Selected Projects
 * Slug: bluebee/work
 * Description: Portfolio grid showcasing selected client projects. Pulls from the Work CPT.
 * Categories: bluebee-sections
 * Keywords: portfolio, work, projects, case studies
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-work bb-section","anchor":"work","style":{"color":{"background":"var:preset|color|white"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<section class="wp-block-group alignfull bb-work bb-section has-background" id="work" style="background-color:var(--wp--preset--color--white);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:group {"className":"bb-section__header bb-animate","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"}} -->
	<div class="wp-block-group bb-section__header bb-animate" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.18em","textTransform":"uppercase"},"color":{"text":"var:preset|color|blue"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
			<p class="has-text-color has-blue-color" style="font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--wp--preset--color--blue);margin-bottom:0.75rem"><?php echo esc_html__( 'Selected Work', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"800","fontSize":"clamp(2.5rem,5vw,4rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
			<h2 class="wp-block-heading" style="font-size:clamp(2.5rem,5vw,4rem);font-weight:800;line-height:0.95;letter-spacing:-0.03em"><?php echo esc_html__( 'Stories we\'ve shaped', 'bluebee' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"bb-btn-ghost bb-magnetic"} -->
			<div class="wp-block-button bb-btn-ghost is-style-outline bb-magnetic"><a class="wp-block-button__link wp-element-button" href="/work"><?php echo esc_html__( 'All Projects', 'bluebee' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":11,"query":{"postType":"bb_work","perPage":6,"orderBy":"menu_order","order":"asc","inherit":false},"className":"bb-work-query"} -->
	<div class="wp-block-query bb-work-query">

		<!-- wp:post-template {"className":"bb-work__grid","layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group {"tagName":"article","className":"bb-work__card bb-animate","layout":{"type":"default"}} -->
			<article class="wp-block-group bb-work__card bb-animate">

				<!-- wp:group {"className":"bb-work__card-inner","layout":{"type":"default"}} -->
				<div class="wp-block-group bb-work__card-inner">

					<!-- wp:post-featured-image {"isLink":true,"className":"bb-work__card-img","aspectRatio":"4/3","linkTarget":"_self"} /-->

					<!-- wp:group {"className":"bb-work__card-info","layout":{"type":"flex","orientation":"vertical","justifyContent":"flex-end"}} -->
					<div class="wp-block-group bb-work__card-info">

						<!-- wp:group {"className":"bb-work__card-meta","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
						<div class="wp-block-group bb-work__card-meta">
							<!-- wp:post-terms {"term":"bb_work_category","className":"bb-tag","separator":" "} /-->
							<!-- wp:post-date {"format":"Y","isLink":false,"className":"bb-work__card-year"} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:post-title {"level":3,"isLink":true,"className":"bb-work__card-title"} /-->

						<!-- wp:post-excerpt {"className":"bb-work__card-excerpt","showMoreOnNewLine":false} /-->

						<!-- wp:paragraph {"className":"bb-work__card-arrow"} -->
						<p class="wp-block-paragraph bb-work__card-arrow" aria-hidden="true">→</p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->

			</article>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"var:preset|color|gray"},"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
		<p class="has-text-color" style="font-size:1rem;color:var(--wp--preset--color--gray);padding-top:4rem;padding-bottom:4rem"><?php echo esc_html__( 'No projects published yet.', 'bluebee' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</section>
<!-- /wp:group -->
