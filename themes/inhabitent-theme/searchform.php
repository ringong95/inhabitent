<form role="search" method="get" class="search-form" id="target" action="<?php echo home_url( '/' ); ?>">

	<fieldset class="nomargins">
		<div class="flexcity">
		<label for="search-1">
		<a class="search-show">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</a>
		</label>
		<label >
		
			<input type="search" class="search-field" id="search-1"	 placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		</div>
		
	</fieldset>
</form>
