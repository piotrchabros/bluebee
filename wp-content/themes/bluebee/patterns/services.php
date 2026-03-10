<?php
/**
 * Title: Services — Grid
 * Slug: bluebee/services
 * Description: Four-column services grid pulled from the Services CPT with hover effects.
 * Categories: bluebee-sections
 * Keywords: services, offerings, what we do
 */
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
		<!-- wp:paragraph {"className":"bb-section__subtitle","style":{"typography":{"fontSize":"1rem","lineHeight":"1.65"},"color":{"text":"var:preset|color|gray"}}} -->
		<p class="bb-section__subtitle has-text-color" style="font-size:1rem;line-height:1.65;color:var(--wp--preset--color--gray)"><?php echo esc_html__( 'End-to-end brand and marketing solutions built for growth-oriented businesses.', 'bluebee' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":10,"query":{"postType":"bb_service","perPage":8,"orderBy":"menu_order","order":"asc","inherit":false},"className":"bb-services-query"} -->
	<div class="wp-block-query bb-services-query">

		<!-- wp:post-template {"className":"bb-services__grid","layout":{"type":"grid","columnCount":4}} -->

			<!-- wp:group {"tagName":"article","className":"bb-service-card bb-animate","style":{"border":{"left":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2rem","right":"2rem"}}},"layout":{"type":"default"}} -->
			<article class="wp-block-group bb-service-card bb-animate" style="border-left-color:var(--wp--preset--color--border);border-left-width:1px;border-left-style:solid;padding-top:2.5rem;padding-right:2rem;padding-bottom:2.5rem;padding-left:2rem">

				<!-- wp:group {"className":"bb-service-card__header","style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group bb-service-card__header" style="margin-bottom:2rem">
					<!-- wp:post-meta {"fieldName":"_bb_icon","showLabel":false,"className":"bb-service-card__icon"} /-->
					<!-- wp:post-meta {"fieldName":"_bb_order","showLabel":false,"className":"bb-service-card__num"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-title {"level":3,"isLink":true,"className":"bb-service-card__title","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"700","fontSize":"1.2rem","lineHeight":"1.2","letterSpacing":"-0.01em"},"spacing":{"margin":{"bottom":"1rem"}}}} /-->

				<!-- wp:post-excerpt {"className":"bb-service-card__excerpt","style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.7"},"color":{"text":"var:preset|color|gray"}}} /-->

				<!-- wp:read-more {"className":"bb-service-card__link","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"0.75rem","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|blue"},"spacing":{"margin":{"top":"2rem"}}}} /-->

			</article>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:group {"className":"bb-services__grid bb-services__grid--fallback","layout":{"type":"grid","columnCount":4}} -->
		<div class="wp-block-group bb-services__grid bb-services__grid--fallback">
			<?php
			$fallback_services = array(
				array( 'icon' => '◎', 'num' => '01', 'title' => __( 'Brand Strategy',    'bluebee' ), 'text' => __( 'We develop sharp positioning, clear messaging hierarchies, and brand architectures that give your business a competitive edge in any market.',       'bluebee' ) ),
				array( 'icon' => '◈', 'num' => '02', 'title' => __( 'Creative Direction', 'bluebee' ), 'text' => __( 'From visual identities to campaign concepts, we craft distinctive aesthetics that resonate with audiences and make brands impossible to ignore.', 'bluebee' ) ),
				array( 'icon' => '◇', 'num' => '03', 'title' => __( 'Digital Marketing',  'bluebee' ), 'text' => __( 'Data-informed campaigns across every digital channel — from paid search and social to email and influencer — optimised for reach and conversion.',   'bluebee' ) ),
				array( 'icon' => '◉', 'num' => '04', 'title' => __( 'Performance Media',  'bluebee' ), 'text' => __( 'We turn ad spend into measurable growth. Our media team manages budgets with rigorous testing, attribution, and continuous performance refinement.',  'bluebee' ) ),
			);
			foreach ( $fallback_services as $svc ) :
				echo "\n\t\t\t<!-- wp:group {\"tagName\":\"article\",\"className\":\"bb-service-card bb-animate\",\"style\":{\"border\":{\"left\":{\"color\":\"var:preset|color|border\",\"width\":\"1px\",\"style\":\"solid\"}},\"spacing\":{\"padding\":{\"top\":\"2.5rem\",\"bottom\":\"2.5rem\",\"left\":\"2rem\",\"right\":\"2rem\"}}},\"layout\":{\"type\":\"default\"}} -->";
				echo "\n\t\t\t<article class=\"wp-block-group bb-service-card bb-animate\" style=\"border-left-color:var(--wp--preset--color--border);border-left-width:1px;border-left-style:solid;padding-top:2.5rem;padding-right:2rem;padding-bottom:2.5rem;padding-left:2rem\">";

				echo "\n\t\t\t\t<!-- wp:group {\"className\":\"bb-service-card__header\",\"style\":{\"spacing\":{\"margin\":{\"bottom\":\"2rem\"}}},\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\",\"justifyContent\":\"space-between\"}} -->";
				echo "\n\t\t\t\t<div class=\"wp-block-group bb-service-card__header\" style=\"margin-bottom:2rem\">";
				echo "\n\t\t\t\t\t<!-- wp:paragraph {\"className\":\"bb-service-card__icon\"} -->";
				echo "\n\t\t\t\t\t<p class=\"wp-block-paragraph bb-service-card__icon\" aria-hidden=\"true\">" . esc_html( $svc['icon'] ) . "</p>";
				echo "\n\t\t\t\t\t<!-- /wp:paragraph -->";
				echo "\n\t\t\t\t\t<!-- wp:paragraph {\"className\":\"bb-service-card__num\"} -->";
				echo "\n\t\t\t\t\t<p class=\"wp-block-paragraph bb-service-card__num\">" . esc_html( $svc['num'] ) . "</p>";
				echo "\n\t\t\t\t\t<!-- /wp:paragraph -->";
				echo "\n\t\t\t\t</div>";
				echo "\n\t\t\t\t<!-- /wp:group -->";

				echo "\n\t\t\t\t<!-- wp:heading {\"level\":3,\"className\":\"bb-service-card__title\",\"style\":{\"typography\":{\"fontFamily\":\"var(--wp--preset--font-family--heading)\",\"fontWeight\":\"700\",\"fontSize\":\"1.2rem\",\"lineHeight\":\"1.2\",\"letterSpacing\":\"-0.01em\"},\"spacing\":{\"margin\":{\"bottom\":\"1rem\"}}}} -->";
				echo "\n\t\t\t\t<h3 class=\"wp-block-heading bb-service-card__title\" style=\"font-family:var(--wp--preset--font-family--heading);font-size:1.2rem;font-weight:700;line-height:1.2;letter-spacing:-0.01em;margin-bottom:1rem\">" . esc_html( $svc['title'] ) . "</h3>";
				echo "\n\t\t\t\t<!-- /wp:heading -->";

				echo "\n\t\t\t\t<!-- wp:paragraph {\"className\":\"bb-service-card__excerpt\",\"style\":{\"typography\":{\"fontSize\":\"0.9rem\",\"lineHeight\":\"1.7\"},\"color\":{\"text\":\"var:preset|color|gray\"}}} -->";
				echo "\n\t\t\t\t<p class=\"wp-block-paragraph bb-service-card__excerpt has-text-color\" style=\"font-size:0.9rem;line-height:1.7;color:var(--wp--preset--color--gray)\">" . esc_html( $svc['text'] ) . "</p>";
				echo "\n\t\t\t\t<!-- /wp:paragraph -->";

				echo "\n\t\t\t\t<!-- wp:paragraph {\"className\":\"bb-service-card__link\",\"style\":{\"spacing\":{\"margin\":{\"top\":\"2rem\"}}}} -->";
				echo "\n\t\t\t\t<p class=\"wp-block-paragraph bb-service-card__link\" style=\"margin-top:2rem\"><a href=\"#services\" class=\"bb-service-card__link-anchor\">" . esc_html__( 'Learn More →', 'bluebee' ) . "</a></p>";
				echo "\n\t\t\t\t<!-- /wp:paragraph -->";

				echo "\n\t\t\t</article>";
				echo "\n\t\t\t<!-- /wp:group -->";
			endforeach;
			?>
		</div>
		<!-- /wp:group -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</section>
<!-- /wp:group -->
