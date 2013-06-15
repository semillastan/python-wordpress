<?php /* Template Name: page-home.php */ ?>
<?php get_header(); ?>
  	<div class="row-fluid">
		<div class="span9">
			<?php the_post(); ?>
				
			<div class="item" id="post-<?php the_ID(); ?>">
				<p>
					<?php the_content("<h6 class='subheader read-more'>Read more</h6>",False,""); ?>
					<?php edit_post_link( "Edit", '<div class="edit-button">', '</div>', $post->ID ); ?>
				</p>
			</div>
			<hr />
		</div>
  		<div class="span3">
  			<?php get_sidebar(); ?>
  		</div>
	</div>
<?php get_footer(); ?>