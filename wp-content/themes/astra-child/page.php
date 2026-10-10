<?php
/**
 * Default page template with Daffodil page hero.
 *
 * @package Astra_Child
 */

get_header();
?>

<main class="di-page">
	<div class="di-page-hero">
		<div class="di-wrap">
			<p class="di-label" style="color:#e8b07a">Ruminate Industries</p>
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="di-content">
		<div class="di-wrap">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			?>
		</div>
	</div>
</main>

<?php
get_footer();
