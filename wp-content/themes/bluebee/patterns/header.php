<?php
/**
 * Title: Header
 * Slug: bluebee/header
 * Description: Main site header with logo, navigation and CTA.
 * Categories: bluebee-components
 * Block Types: core/template-part/header
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"header","className":"bb-header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"},"style":{"position":{"type":"sticky"},"top":"0","zIndex":"100","color":{"background":"rgba(247,244,239,0.92)"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"width":"0px"}}}} -->
<header class="wp-block-group bb-header" style="position:sticky;top:0;z-index:100;background-color:rgba(247,244,239,0.92);padding:1.25rem var(--wp--preset--spacing--60)">

	<!-- wp:group {"className":"bb-header__brand","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"flex-start"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
	<div class="wp-block-group bb-header__brand" style="gap:0.75rem">
		<!-- wp:site-logo {"width":36,"shouldSyncIcon":false} /-->
		<!-- wp:site-title {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"800","fontSize":"1.1rem","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"#0C0C0A"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:navigation {"className":"bb-header__nav","overlayMenu":"mobile","style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"flex","justifyContent":"flex-end","flexWrap":"nowrap"}} /-->

	<!-- wp:group {"className":"bb-header__actions","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"flex-end"},"style":{"spacing":{"blockGap":"1rem"}}} -->
	<div class="wp-block-group bb-header__actions" style="gap:1rem">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"bb-btn-primary bb-btn-sm","style":{"color":{"background":"#1B45E8","text":"#FFFFFF"},"border":{"radius":"0px"},"spacing":{"padding":{"top":"0.65rem","bottom":"0.65rem","left":"1.5rem","right":"1.5rem"}},"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
			<div class="wp-block-button bb-btn-primary bb-btn-sm"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#contact" style="background-color:#1B45E8;color:#FFFFFF;border-radius:0;padding:0.65rem 1.5rem;font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Start a Project', 'bluebee' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
