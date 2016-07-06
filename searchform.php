<div class="search-bar">
	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="search-form" autocomplete="off" placeholder="<?php _e('Escriba un texto y presione "Enter"', 'comerydivertirse'); ?>" value="<?php echo get_search_query(); ?>" name="s" id="s">
	</form>
</div> <!--/.search--> 