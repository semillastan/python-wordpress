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
 * @package Bodegapps
 * @subpackage bodegapps
 * @since 2013 1.0
 */

get_header(); ?>
	<div class="row-fluid push-from-top blog" id="id_blog"><div class="span12">
		<?php the_post(); ?>
			<div class="blog-post">
				<div class="title">
					<h2><?php the_title(); ?>&nbsp;<small><?php THE_TIME('F j, Y') ?></small></h2>
				</div>
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
	</div></div>
	<hr />
<?php get_footer(); ?>