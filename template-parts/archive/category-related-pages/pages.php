<?php
$term = get_queried_object();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = [
    'category_name' => $term->slug,
    'post_type' => ['page'],
    'posts_per_page'         => 10,
    'paged' => $paged,
    'orderby' => 'date',
    'order'   => 'DESC',
    'update_post_meta_cache' => false,
    'update_post_term_cache' => false,
];

$post_query = new \WP_Query($args);

if ($post_query->have_posts()) :
    while ($post_query->have_posts()) :
        $post_query->the_post();
        if (has_post_thumbnail()) :
?>
            <div class="row border rounded mb-4">
                <div class="col-md-12">
                    <?php
                    printf(
                        '<h3 class="entry-title mb-3 text-center"><a class="text-dark" href="%1$s">%2$s</a></h3>',
                        esc_url(get_the_permalink()),
                        wp_kses_post(get_the_title())
                    );
                    ?>

                    <div class="d-flex justify-content-between text-muted">
                        <p>Yazar: <?php echo get_the_author(); ?> </p>
                        <p><?php aquila_posted_on(); ?></p>
                    </div>

                </div>
                <div class="col-md-6 pb-4 opacity-eight-percent">
                    <a href="<?php echo esc_url(get_the_permalink()); ?>">
                        <?php
                        the_post_custom_thumbnail(
                            get_the_ID(),
                            'featured-thumbnail',
                            [
                                'sizes' => '(max-width: 400px) 400px, 300px',
                                'class' => 'w-100 shadow opacity-eight-percent',
                            ]
                        );
                        ?>
                    </a>
                </div>
                <div class="col-md-6 mt-n4 mt-md-0">
                    <?php get_template_part('template-parts/front-page/categories-related-pages/_content'); ?>
                </div>
            </div>
    <?php
        endif;
    endwhile;
    ?>
    <div class="row">
        <?php get_template_part('template-parts/components/_costum_pagination.php'); ?>
    </div>
<?php
endif;
wp_reset_postdata();
?>