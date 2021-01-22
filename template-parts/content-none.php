<?php

/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package aquila
 */

?>

<section class="no-result not-found container mb-5">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Bulunamadı', 'aquila'); ?></h1>
	</header>

	<div class="page-content">
		<?php
		if (is_home() && current_user_can('publish_posts')) {
		?>
			<p>
				<?php
				printf(
					wp_kses(
						__('Ready to publish your first post? <a href="%s">Get started here</a>', 'aquila'),
						[
							'a' => [
								'href' => []
							]
						]
					),
					esc_url(admin_url('post-new.php'))
				)
				?>
			</p>
		<?php
		} elseif (is_search()) {
		?>
			<p><?php esc_html_e('Üzgünüz aradığınızla ilgili birşey bulamadık. Tekrar deneyebilirsiniz.', 'aquila'); ?></p>
		<?php
			get_search_form();
		} else {
		?>
			<p><?php esc_html_e('Üzgünüz aradığınızla ilgili birşey bulamadık. Belki arama yardımcı olabilir.', 'aquila'); ?></p>
		<?php
			get_search_form();
		}
		?>
	</div>
</section>