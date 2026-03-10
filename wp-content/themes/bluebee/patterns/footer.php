<?php
/**
 * Title: Footer
 * Slug: bluebee/footer
 * Description: Main site footer with logo, navigation, social links, and copyright.
 * Categories: bluebee-components
 * Block Types: core/template-part/footer
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"footer","className":"bb-footer","align":"full","style":{"color":{"background":"var:preset|color|black","text":"var:preset|color|cream"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<footer class="wp-block-group alignfull bb-footer has-black-background-color has-cream-color has-text-color has-background" style="background-color:var(--wp--preset--color--black);color:var(--wp--preset--color--cream);padding:var(--wp--preset--spacing--70) var(--wp--preset--spacing--60) var(--wp--preset--spacing--50)">

	<!-- wp:group {"className":"bb-footer__top","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"3rem"},"border":{"bottom":{"color":"rgba(255,255,255,0.1)","width":"1px"},"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-start"}} -->
	<div class="wp-block-group bb-footer__top" style="margin-bottom:var(--wp--preset--spacing--60);border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:var(--wp--preset--spacing--60)">

		<!-- wp:group {"className":"bb-footer__brand","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"flex-start","orientation":"vertical"}} -->
		<div class="wp-block-group bb-footer__brand" style="gap:1.25rem">
			<!-- wp:site-logo {"width":36,"style":{"filter":{"duotone":"unset"}}} /-->
			<!-- wp:site-title /-->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.6"},"color":{"text":"rgba(247,244,239,0.5)"},"spacing":{"margin":{"top":"0.25rem"}}}} -->
			<p style="font-size:0.9rem;line-height:1.6;color:rgba(247,244,239,0.5);margin-top:0.25rem"><?php echo esc_html__( 'Making brands unforgettable.', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"bb-footer__nav-cols","style":{"spacing":{"blockGap":"4rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"flex-end","verticalAlignment":"flex-start"}} -->
		<div class="wp-block-group bb-footer__nav-cols" style="gap:4rem">

			<!-- wp:group {"className":"bb-footer__nav-col","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group bb-footer__nav-col">
				<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"600","fontSize":"0.7rem","letterSpacing":"0.15em","textTransform":"uppercase"},"color":{"text":"rgba(247,244,239,0.4)"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h5 style="font-size:0.7rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:rgba(247,244,239,0.4);margin-bottom:1rem"><?php echo esc_html__( 'Services', 'bluebee' ); ?></h5>
				<!-- /wp:heading -->
				<!-- wp:list {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"2"},"color":{"text":"rgba(247,244,239,0.7)"}},"className":"bb-footer__links"} -->
				<ul class="wp-block-list bb-footer__links" style="font-size:0.9rem;line-height:2;color:rgba(247,244,239,0.7)">
					<li><?php echo esc_html__( 'Brand Strategy', 'bluebee' ); ?></li>
					<li><?php echo esc_html__( 'Creative Direction', 'bluebee' ); ?></li>
					<li><?php echo esc_html__( 'Digital Marketing', 'bluebee' ); ?></li>
					<li><?php echo esc_html__( 'Performance Media', 'bluebee' ); ?></li>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"bb-footer__nav-col","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group bb-footer__nav-col">
				<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"600","fontSize":"0.7rem","letterSpacing":"0.15em","textTransform":"uppercase"},"color":{"text":"rgba(247,244,239,0.4)"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h5 style="font-size:0.7rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:rgba(247,244,239,0.4);margin-bottom:1rem"><?php echo esc_html__( 'Company', 'bluebee' ); ?></h5>
				<!-- /wp:heading -->
				<!-- wp:list {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"2"},"color":{"text":"rgba(247,244,239,0.7)"}},"className":"bb-footer__links"} -->
				<ul class="wp-block-list bb-footer__links" style="font-size:0.9rem;line-height:2;color:rgba(247,244,239,0.7)">
					<li><a href="/about" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'About Us', 'bluebee' ); ?></a></li>
					<li><a href="/work" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Our Work', 'bluebee' ); ?></a></li>
					<li><a href="/blog" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Blog', 'bluebee' ); ?></a></li>
					<li><a href="#contact" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Contact', 'bluebee' ); ?></a></li>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"bb-footer__nav-col","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group bb-footer__nav-col">
				<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"600","fontSize":"0.7rem","letterSpacing":"0.15em","textTransform":"uppercase"},"color":{"text":"rgba(247,244,239,0.4)"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
				<h5 style="font-size:0.7rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:rgba(247,244,239,0.4);margin-bottom:1rem"><?php echo esc_html__( 'Contact', 'bluebee' ); ?></h5>
				<!-- /wp:heading -->
				<!-- wp:list {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"2"},"color":{"text":"rgba(247,244,239,0.7)"}},"className":"bb-footer__links"} -->
				<ul class="wp-block-list bb-footer__links" style="font-size:0.9rem;line-height:2;color:rgba(247,244,239,0.7)">
					<li><a href="mailto:hello@bluebee.agency" style="color:rgba(247,244,239,0.7);text-decoration:none">hello@bluebee.agency</a></li>
					<li>+1 (555) 000-0000</li>
					<li>New York, NY</li>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"bb-footer__bottom","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group bb-footer__bottom">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.05em"},"color":{"text":"rgba(247,244,239,0.35)"}}} -->
		<p style="font-size:0.75rem;letter-spacing:0.05em;color:rgba(247,244,239,0.35)">
			<?php
			printf(
				/* translators: 1: year, 2: site name */
				esc_html__( '© %1$s %2$s. All rights reserved.', 'bluebee' ),
				date_i18n( 'Y' ),
				get_bloginfo( 'name' )
			);
			?>
		</p>
		<!-- /wp:paragraph -->
		<!-- wp:social-links {"iconColor":"rgba(247,244,239,0.4)","iconColorValue":"rgba(247,244,239,0.4)","size":"has-small-icon-size","className":"bb-social-links","style":{"spacing":{"blockGap":"1rem"}}} -->
		<ul class="wp-block-social-links has-small-icon-size bb-social-links">
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"#","service":"x"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

</footer>
<!-- /wp:group -->
