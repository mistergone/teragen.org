<div id="sidebar">
<h2 class="sidebartitle">Recent Posts</h2>
<ul>
<?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>

<h2 class="sidebartitle"><?php _e('Categories'); ?></h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>