<?php

/**
 * Footer template
 *
 * @package Aquila
 */
?>


<div class="container-fluid bg-dark py-4 text-light" id="footer">
	<div class="container">
			Copyright 2021, Tüm Hakları Saklıdır | Theme Created by Emir Sağıt | Designed by Cihangir Defterdar
		<?php if (is_active_sidebar('sidebar-2')) { ?>
			<aside>
				<?php dynamic_sidebar('sidebar-2'); ?>
			</aside>
		<?php } ?>
	</div>
</div>
</div>
<?php wp_footer(); ?>
</div>
</body>

</html>