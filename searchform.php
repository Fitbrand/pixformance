<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

<label class="screen-reader-text" for="s"><?php _e('Search for:', '_pixformance'); ?></label>
<div class="form-field-naked p1-lr">
<input type="text" value="" placeholder="<?php _e('Enter your search term', '_pixformance'); ?>" name="s" id="s" />
</div>
<input type="submit" id="searchsubmit" value="<?php _e('Search', '_pixformance'); ?>" class="button" />

</form>