<?php
/*
 * The Single Posts Loop
 * =====================
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
	<header>
		<h2><?php the_title()?></h2>
		<h4>
			<em> <span class="text-muted author"><?php _e('', 'bst'); echo " "; the_author() ?>,</span> <time class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('j F Y') ?></time>
			</em>
		</h4>
		<p class="text-muted">
			<i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php the_category(', ') ?><br />
		</p>
		<div class="clearfix space-xs"></div>
	</header>
	<section>
            <?php the_post_thumbnail(); ?>
            <?php the_content()?>
            <?php wp_link_pages(); ?>
        </section>
</article>
<?php comments_template('/includes/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
