<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Python Wordpress
 * @subpackage python
 * @since 2013 1.0
 */

get_header(); ?>
	<div class="row-fluid">
		<div class="span9 content-container">
			<?php the_post(); ?>
				
			<div class="item" id="post-<?php the_ID(); ?>">
				<h4 class="headline"><?php the_title(); ?></h4>
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