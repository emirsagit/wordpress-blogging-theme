<?php

/**
 * Front page template
 *
 * @package aquila
 */


get_header();

?>

<div class="container-fluid">
    <div class="row text-info py-3 justify-content-center">
        <h1>
            <?php single_cat_title(); ?>
        </h1>
    </div>

    <div class="container pb-4">
        <div class="row">
            <div class="col-md-9">
                <div id="content">
                    <?php echo category_description(); ?>
                </div>
                <?php
                get_template_part('template-parts/archive/category-related-pages/pages');
                ?>
            </div>
            <div class="col-md-3">
                <?php 
                 get_template_part('template-parts/components/_sidebar');
                ?>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
