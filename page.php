<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="article-header">

						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

					</header>

					<section class="entry-content cf" itemprop="articleBody">
						<?php
							the_content();
						?>
					</section>

				</article>

			<?php endwhile; endif; ?>

		</main>

		<?php get_sidebar(); ?>

	</div>

</div>

<?php get_footer(); ?>
