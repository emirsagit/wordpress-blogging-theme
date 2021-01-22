<div class="sticky-top mt-0 pb-2">
    <?php
    $term = get_queried_object();
    $args = [
        'category_name' => is_archive() ? $term->slug : "",
        'posts_per_page'         => 10,
        'post_type'              => 'post',
        'orderby' => 'date',
        'order'   => 'DESC',
        'update_post_meta_cache' => false,
        'update_post_term_cache' => false,
    ];
    $post_query = new \WP_Query($args); ?>
    <div class="row justify-content-center mb-4">
        <h4>
            Son Yazılar
        </h4>
    </div>
    <?php
    if ($post_query->have_posts()) :
        while ($post_query->have_posts()) :
            $post_query->the_post();
    ?>
            <div class="row mb-3">
                <div class="col-md-6 pr-lg-0">
                    <div class="image-parent opacity-eight-percent">
                        <a href="<?= esc_url(get_the_permalink()); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_custom_thumbnail(
                                    get_the_ID(),
                                    'featured-thumbnail',
                                    [
                                        'sizes' => '(max-width: 400px) 400px, 300px',
                                        'class' => 'shadow img-fluid'
                                    ]
                                );
                            } else {
                            ?>
                                <img src="https://via.placeholder.com/510x340" class="img-fluid" alt="Card image cap">
                            <?php
                            }
                            ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center mt-n5 mt-md-0">
                    <a href="<?= esc_url(get_the_permalink()); ?>" class="pl-2 pl-md-0">
                        <?php the_title() ?>
                    </a>
                </div>
            </div>

    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>