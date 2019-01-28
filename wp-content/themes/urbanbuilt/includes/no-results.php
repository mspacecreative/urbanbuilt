<div class="entry">
<!--If no results are found-->
	<h1 class="post-title"><?php esc_html_e('No Results Found','Divi'); ?></h1>
	<p><?php esc_html_e('The page you requested could not be found. Try refining your search, or use the navigation above to locate the post.','Divi'); ?></p>
	<p><?php esc_html_e('Or, better yet, see if any of the links below might be helpful:','Divi'); ?></p>
	<ul>
		<?php wp_list_pages( array( 'title_li' => '' ) ); ?>
	</ul>
</div>
<!--End if no results are found-->