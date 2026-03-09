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
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"600","fontSize":"0.72rem","letterSpacing":"0.18em","textTransform":"uppercase"},"color":{"text":"#1B45E8"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--heading);font-size:0.72rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:#1B45E8;margin-bottom:0.75rem"><?php echo esc_html__( 'Selected Work', 'bluebee' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"800","fontSize":"clamp(2.5rem,5vw,4rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--heading);font-size:clamp(2.5rem,5vw,4rem);font-weight:800;line-height:0.95;letter-spacing:-0.03em"><?php echo esc_html__( 'Stories we\'ve shaped', 'bluebee' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"bb-btn-ghost bb-magnetic","style":{"color":{"text":"#0C0C0A"},"border":{"radius":"0px","width":"1.5px","color":"#0C0C0A"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"2rem","right":"2rem"}},"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontWeight":"600","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
			<div class="wp-block-button bb-btn-ghost is-style-outline bb-magnetic"><a class="wp-block-button__link has-text-color wp-element-button" href="/work" style="color:#0C0C0A;border-radius:0;border:1.5px solid #0C0C0A;padding:0.8rem 2rem;font-family:var(--wp--preset--font-family--heading);font-size:0.75rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'All Projects', 'bluebee' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- Dynamic portfolio from Work CPT -->
	<!-- wp:html -->
	<div class="bb-work__grid" id="bb-work-grid">
	<?php
	$work_query = new WP_Query( array(
		'post_type'      => 'bb_work',
		'posts_per_page' => 6,
		'post_status'    => 'publish',
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
		'no_found_rows'  => true,
	) );

	if ( $work_query->have_posts() ) :
		$positions = array( 'large', 'medium', 'medium', 'medium', 'medium', 'large' );
		$i         = 0;
		while ( $work_query->have_posts() ) :
			$work_query->the_post();
			$client   = get_post_meta( get_the_ID(), '_bb_client', true );
			$year     = get_post_meta( get_the_ID(), '_bb_year', true );
			$services = get_post_meta( get_the_ID(), '_bb_services', true );
			$proj_url = get_post_meta( get_the_ID(), '_bb_project_url', true );
			$link     = $proj_url ?: get_permalink();
			$size     = isset( $positions[ $i ] ) ? $positions[ $i ] : 'medium';
			$cats     = get_the_terms( get_the_ID(), 'bb_work_category' );
			$cat_name = ( $cats && ! is_wp_error( $cats ) ) ? esc_html( $cats[0]->name ) : esc_html( $services );
			?>
			<article class="bb-work__card bb-work__card--<?php echo esc_attr( $size ); ?> bb-animate" style="--bb-delay:<?php echo $i * 0.1; ?>s">
				<a href="<?php echo esc_url( $link ); ?>" class="bb-work__card-inner">
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="bb-work__card-img">
						<?php the_post_thumbnail( 'bluebee-card', array( 'loading' => 'lazy' ) ); ?>
					</div>
					<?php else : ?>
					<div class="bb-work__card-img bb-work__card-img--placeholder" aria-hidden="true"></div>
					<?php endif; ?>
					<div class="bb-work__card-info">
						<div class="bb-work__card-meta">
							<?php if ( $cat_name ) : ?>
							<span class="bb-tag"><?php echo esc_html( $cat_name ); ?></span>
							<?php endif; ?>
							<?php if ( $year ) : ?>
							<span class="bb-work__card-year"><?php echo esc_html( $year ); ?></span>
							<?php endif; ?>
						</div>
						<h3 class="bb-work__card-title">
							<?php echo esc_html( $client ?: get_the_title() ); ?>
						</h3>
						<p class="bb-work__card-excerpt"><?php echo esc_html( get_the_title() ); ?></p>
						<span class="bb-work__card-arrow" aria-hidden="true">→</span>
					</div>
				</a>
			</article>
			<?php
			$i++;
		endwhile;
		wp_reset_postdata();
	else :
		// Placeholder cards when no work posts exist
		$placeholders = array(
			array( 'title' => __( 'Nova Skincare — Rebrand', 'bluebee' ),       'cat' => __( 'Branding', 'bluebee' ),         'size' => 'large',  'year' => '2024' ),
			array( 'title' => __( 'Apex Finance — Campaign', 'bluebee' ),       'cat' => __( 'Strategy', 'bluebee' ),         'size' => 'medium', 'year' => '2024' ),
			array( 'title' => __( 'Luma Coffee — Identity', 'bluebee' ),        'cat' => __( 'Creative', 'bluebee' ),         'size' => 'medium', 'year' => '2023' ),
			array( 'title' => __( 'Drift Apparel — Digital', 'bluebee' ),       'cat' => __( 'Digital', 'bluebee' ),          'size' => 'medium', 'year' => '2023' ),
			array( 'title' => __( 'Bloom Health — Performance', 'bluebee' ),    'cat' => __( 'Performance', 'bluebee' ),      'size' => 'medium', 'year' => '2023' ),
			array( 'title' => __( 'Vault Tech — Launch', 'bluebee' ),           'cat' => __( 'Strategy', 'bluebee' ),         'size' => 'large',  'year' => '2022' ),
		);
		foreach ( $placeholders as $j => $ph ) : ?>
		<article class="bb-work__card bb-work__card--<?php echo esc_attr( $ph['size'] ); ?> bb-animate" style="--bb-delay:<?php echo $j * 0.1; ?>s">
			<a href="/work" class="bb-work__card-inner">
				<div class="bb-work__card-img bb-work__card-img--placeholder" aria-hidden="true"></div>
				<div class="bb-work__card-info">
					<div class="bb-work__card-meta">
						<span class="bb-tag"><?php echo esc_html( $ph['cat'] ); ?></span>
						<span class="bb-work__card-year"><?php echo esc_html( $ph['year'] ); ?></span>
					</div>
					<h3 class="bb-work__card-title"><?php echo esc_html( $ph['title'] ); ?></h3>
					<span class="bb-work__card-arrow" aria-hidden="true">→</span>
				</div>
			</a>
		</article>
		<?php endforeach;
	endif;
	?>
	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
