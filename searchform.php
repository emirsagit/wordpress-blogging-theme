<?php

/**
 * Search Form
 *
 * @package Blog Starter
 */

?>
<form class="navbar-form py-1" method="get" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="input-group">
		<input type="text" class="form-control" id="search" placeholder="<?php esc_attr_e('Ara', 'aquila'); ?>" value="<?php echo esc_attr(the_search_query()); ?>" name="s">
		<div class="input-group-append">
			<button class="btn btn-sm form-control" type="submit">
				<i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16">
						<path d="M508.875 493.792L353.089 338.005c32.358-35.927 52.245-83.296 52.245-135.339C405.333 90.917 314.417 0 202.667 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c52.043 0 99.411-19.887 135.339-52.245l155.786 155.786a10.634 10.634 0 007.542 3.125c2.729 0 5.458-1.042 7.542-3.125 4.166-4.167 4.166-10.917-.001-15.083zM202.667 384c-99.979 0-181.333-81.344-181.333-181.333S102.688 21.333 202.667 21.333 384 102.677 384 202.667 302.646 384 202.667 384z" />
					</svg></i>
			</button>
		</div>
	</div>
</form>