<?php

/**
 * Front page template
 *
 * @package aquila
 */


get_header();

?>

<div id="primary" class="container-fluid bg-puzzle">
	<main id="main" class="site-main container py-4" role="main">
		<h3 class="text-center">Kategoriler</h3>
		<div class="row">
			<?php
			if (have_posts()) :
				get_template_part('template-parts/front-page/categories/categories');

			?>

			<?php

			else :

				get_template_part('template-parts/content-none');

			endif;

			?>

		</div>

	</main>
	<div class="container pb-4">
		<h3 class="text-center">Son Eklenenler</h3>
		<div class="row">
			<div class="col-md-12">
				<?php
				get_template_part('template-parts/components/posts-carousel');
				?>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="container py-4">
		<div class="row">
			<div class="col-md-9">
				<?php
				get_template_part('template-parts/front-page/categories-related-pages/pages');
				?>
			</div>
			<div class="col-md-3">
				<div class="sticky-top">
					<?php
					get_template_part('template-parts/components/_sidebar');
					?>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
get_footer();
