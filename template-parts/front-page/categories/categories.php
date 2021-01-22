
<?php
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));

foreach ($categories as $category) {
    $meta = get_term_meta($category->term_id, 'category-image-id', true);
    if (!$meta) continue;
?>
    <div class="col-md-4 mb-4">
        <a href="<?= get_category_link($category->term_id) ?>" class="opacity-eight-percent">
            <?php
            echo wp_get_attachment_image($meta, array('700', '600'), "", array("class" => "img-fluid shadow"));
            ?>
            <div class="category-title-bg p-1 d-flex">
                <?= $category->name ?>
            </div>
        </a>
    </div>
<?php } ?>