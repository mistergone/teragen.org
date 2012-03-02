<?php get_header(); ?>

<div id="main">
<div id="content">
<?php if (is_category()): ?>
	<h3 id="category-title">Displaying posts from "<?php echo single_cat_title( '', false ); ?>":</h3>
<?php endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_content(__('(more...)')); ?></p>
        <p class="postdetails">Filed under <?php the_category(', '); ?></p>
		
	   	<p class="postedon">Posted on <?php the_time('F jS, Y') ?></p>
	</div>
<?php endwhile; else: ?>

<p><?php _e("No such post could be found."); ?></p>
<?php endif; ?>
</div>

<?php get_sidebar(); ?>

</div>

<div id="delimiter"></div>

<?php get_footer(); ?>