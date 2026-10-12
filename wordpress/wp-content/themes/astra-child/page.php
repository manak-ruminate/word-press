<?php
/**
 * Default fallback page template
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="di-page di-default-page">
	<section class="di-default-hero">
		<div class="di-container">
			<div class="di-breadcrumbs">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span class="di-bc-sep">/</span>
				<span class="di-bc-current"><?php the_title(); ?></span>
			</div>
			<span class="di-section-tag" style="color:var(--di-orange);">RUMINATE INDUSTRIES &bull; DAFFODIL INDIA</span>
			<h1 class="di-default-title"><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="di-section di-default-content-section">
		<div class="di-container">
			<div class="di-default-card">
				<?php
				while ( have_posts() ) :
					the_post();
					the_content();
				endwhile;
				?>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
