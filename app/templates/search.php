<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage <%= themeFunction %>
 * @since <%= themeName %> 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', '<%= themeHandle %>' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'content');
					?>

				<?php endwhile; ?>

				<nav id="nav-below">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&#171;</span> Older posts', '<%= themeHandle %>' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&#187;</span>', '<%= themeHandle %>' ) ); ?></div>
				</nav><!-- #nav-above -->

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', '<%= themeHandle %>' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', '<%= themeHandle %>' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>