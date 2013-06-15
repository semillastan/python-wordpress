<?php /* Template Name: page.php */ ?>
<?php get_header(); ?>
	<div class="row-fluid">
		<div class="span9 white add-padding-10">
			<?php the_post(); ?>
				
			<div class="item" id="post-<?php the_ID(); ?>">
				<h3 class="headline"><?php the_title(); ?></h3>
				<p>
					<?php if(has_post_thumbnail()){ ?>
						<div class="thumbnail"><?php the_post_thumbnail(); ?></div>								
					<?php }?>
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