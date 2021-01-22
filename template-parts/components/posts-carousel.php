<?php

/**
 * Posts Carousel
 *
 * @package aquila
 */

$args = [
	'posts_per_page'         => 5,
	'post_type'              => 'page',
	'orderby' => 'date',
	'order'   => 'DESC',
	'update_post_meta_cache' => false,
	'update_post_term_cache' => false,
];

$post_query = new \WP_Query($args);
?>
<div class="posts-carousel">
	<?php
	if ($post_query->have_posts()) :
		while ($post_query->have_posts()) :
			$post_query->the_post();
	?>
			<div class="card">
				<a href="<?php echo esc_url(get_the_permalink()); ?>">
					<?php
					if (has_post_thumbnail()) {
						the_post_custom_thumbnail(
							get_the_ID(),
							'featured-thumbnail',
							[
								'sizes' => '(max-width: 400px) 400px, 300px',
								'class' => 'w-100',
							]
						);
					} else {
					?>
						<img src="https://via.placeholder.com/510x340" class="img-fluid" alt="Card image cap">
					<?php
					}
					?>
				</a>
				<div class="card-body">
					<a href="<?php echo esc_url(get_the_permalink()); ?>">
						<?php the_title('<h4 class="card-title mt-n2">'); ?><span class="badge badge-pill badge-light text-black-50"><?php the_date() ?></span></h4>
					</a>
				</div>
			</div>
	<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>
</div>