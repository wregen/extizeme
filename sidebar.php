	<div id="sidebar">
		<ul>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) : ?>
			<li>
				<?php get_search_form(); ?>
			</li>
			<?php endif; ?>
		</ul>
	</div>

