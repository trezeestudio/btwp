<?php
/*
 * Template Name: Full Width
 */
?>
<?php get_template_part('includes/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div id="content" role="main">
	      		<?php the_content(); ?>
	        	<?php get_template_part('includes/loops/content', 'page'); ?>
      		</div>
		</div>
	</div>
</div>
<?php get_template_part('includes/footer'); ?>