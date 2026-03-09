<?php
/**
 * Title: CTA — Contact & Enquiry
 * Slug: bluebee/cta
 * Description: Bold full-width CTA section with AJAX contact form.
 * Categories: bluebee-sections
 * Keywords: cta, contact, enquiry, form, get in touch
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bb-cta bb-section","anchor":"contact","style":{"color":{"background":"var:preset|color|blue","text":"var:preset|color|white"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","wideSize":"1280px"}} -->
<section class="wp-block-group alignfull bb-cta bb-section has-background has-text-color" id="contact" style="background-color:var(--wp--preset--color--blue);color:var(--wp--preset--color--white);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"50%","className":"bb-cta__left bb-animate"} -->
		<div class="wp-block-column bb-cta__left bb-animate" style="flex-basis:50%">

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.18em","textTransform":"uppercase"},"color":{"text":"rgba(255,255,255,0.55)"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
			<p class="has-text-color" style="font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:rgba(255,255,255,0.55);margin-bottom:1.25rem"><?php echo esc_html__( 'Start a Project', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"800","fontSize":"clamp(2.5rem,5vw,4.5rem)","lineHeight":"0.93","letterSpacing":"-0.035em"},"color":{"text":"var:preset|color|white"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
			<h2 class="wp-block-heading has-text-color" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(2.5rem,5vw,4.5rem);font-weight:800;line-height:0.93;letter-spacing:-0.035em;color:var(--wp--preset--color--white);margin-bottom:2rem"><?php echo esc_html__( 'Ready to grow your brand?', 'bluebee' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.65"},"color":{"text":"rgba(255,255,255,0.75)"},"spacing":{"margin":{"bottom":"3rem"}}}} -->
			<p class="has-text-color" style="font-size:1.1rem;line-height:1.65;color:rgba(255,255,255,0.75);margin-bottom:3rem"><?php echo esc_html__( 'Tell us about your project. We typically respond within one business day — no commitment, no pressure.', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"bb-cta__contact-info","style":{"spacing":{"blockGap":"1.25rem"}}} -->
			<div class="wp-block-group bb-cta__contact-info" style="gap:1.25rem">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"0.8rem","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"rgba(255,255,255,0.5)"}}} -->
				<p class="has-text-color" style="font-family:var(--wp--preset--font-family--heading);font-size:0.8rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:rgba(255,255,255,0.5)"><?php echo esc_html__( 'Or reach us directly', 'bluebee' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"700"},"color":{"text":"var:preset|color|white"}}} -->
				<p class="has-text-color" style="font-size:1.1rem;font-family:var(--wp--preset--font-family--heading);font-weight:700;color:var(--wp--preset--color--white)"><a href="mailto:hello@bluebee.agency" style="color:inherit;text-decoration:none">hello@bluebee.agency</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","className":"bb-cta__right bb-animate bb-animate--delay-2"} -->
		<div class="wp-block-column bb-cta__right bb-animate bb-animate--delay-2" style="flex-basis:50%">

			<!-- wp:html -->
			<form class="bb-contact-form" id="bb-contact-form" novalidate>
				<input type="hidden" name="action" value="bluebee_contact" />
				<input type="hidden" name="nonce" value="<?php echo esc_attr( wp_create_nonce( 'bluebee_nonce' ) ); ?>" />

				<div class="bb-form-group">
					<label for="bb-name"><?php echo esc_html__( 'Your Name', 'bluebee' ); ?></label>
					<input type="text" id="bb-name" name="name" required autocomplete="name"
						placeholder="<?php echo esc_attr__( 'Jane Smith', 'bluebee' ); ?>" />
				</div>

				<div class="bb-form-group">
					<label for="bb-email"><?php echo esc_html__( 'Email Address', 'bluebee' ); ?></label>
					<input type="email" id="bb-email" name="email" required autocomplete="email"
						placeholder="<?php echo esc_attr__( 'jane@company.com', 'bluebee' ); ?>" />
				</div>

				<div class="bb-form-group">
					<label for="bb-message"><?php echo esc_html__( 'Tell Us About Your Project', 'bluebee' ); ?></label>
					<textarea id="bb-message" name="message" rows="5" required
						placeholder="<?php echo esc_attr__( 'We\'re a growing SaaS company looking to refresh our brand identity and launch a digital campaign…', 'bluebee' ); ?>"></textarea>
				</div>

				<div class="bb-form-footer">
					<button type="submit" class="bb-form-submit bb-magnetic">
						<span class="bb-form-submit__text"><?php echo esc_html__( 'Send Message', 'bluebee' ); ?></span>
						<span class="bb-form-submit__icon" aria-hidden="true">→</span>
					</button>
					<p class="bb-form-notice" style="font-size:0.78rem;color:rgba(255,255,255,0.5);margin-top:1rem">
						<?php echo esc_html__( 'We respect your privacy. No spam, ever.', 'bluebee' ); ?>
					</p>
				</div>

				<div class="bb-form-status" role="alert" aria-live="polite"></div>
			</form>
			<!-- /wp:html -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
