<?php
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));

foreach ($categories as $term) {
    $args = [
        'category_name' => $term->slug,
        'post_type' => 'page',
        'posts_per_page'         => 3,
        'orderby' => 'date',
        'order'   => 'DESC',
        'update_post_meta_cache' => false,
        'update_post_term_cache' => false,
    ];

    $post_query = new \WP_Query($args);
?>
    <div class="posts mb-4 px-1 px-lg-4 border rounded">
        <h3 class="shadow-sm rounded text-center"><a href="<?= get_category_link($term->term_id) ?>"><?= $term->name ?></a></h3>
        <?php
        if ($post_query->have_posts()) :
            while ($post_query->have_posts()) :
                $post_query->the_post();
                if (has_post_thumbnail()) :
        ?>
                    <div class="row mb-4">
                        <div class="col-12">
                            <?php
                            printf(
                                '<h4 class="entry-title mb-3 text-center"><a class="text-dark" href="%1$s">%2$s</a></h4>',
                                esc_url(get_the_permalink()),
                                wp_kses_post(get_the_title())
                            );
                            ?>
                        </div>
                        <div class="col-md-6 opacity-eight-percent">
                            <a href="<?= esc_url(get_the_permalink()); ?>">
                                <?php
                                the_post_custom_thumbnail(
                                    get_the_ID(),
                                    'featured-thumbnail',
                                    [
                                        'sizes' => '(max-width: 400px) 400px, 300px',
                                        'class' => 'w-100 shadow rounded',
                                    ]
                                );
                                ?>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <?php get_template_part('template-parts/front-page/categories-related-pages/_content'); ?>
                        </div>
                    </div>
        <?php
                endif;
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
<?php
}
?>