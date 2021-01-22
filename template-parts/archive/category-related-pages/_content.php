<div class="entry-content">
    <?php 
    printf(
        '<h4 class="entry-title mb-3"><a class="text-dark" href="%1$s">%2$s</a></h4>',
        esc_url( get_the_permalink() ),
        wp_kses_post( get_the_title() )
    );
    ?>
    <p class="d-none d-lg-flex">
        <?php
        aquila_the_excerpt(250);
        ?>
    </p>
    <button class="btn btn-sm btn-primary text-sm">Devamı</button>
</div>