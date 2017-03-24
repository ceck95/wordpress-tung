<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-form">
	<div class="form-group">

		<input type="search" name="s" value="" placeholder="<?php esc_html_e('Enter a Keyword', 'dreamland');?>">
		<button type="submit" name="submit"><span class="fa fa-search"></span></button>
	</div>
</form>