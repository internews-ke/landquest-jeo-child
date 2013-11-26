<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>

	<?php jeo_map(); ?>

	<article id="content" class="single-post">
		<header id="post-header" class="page-header">
			<div class="container">
				<div class="ten columns offset-by-one">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
		<section class="content">
			<div class="container">
				<div class="ten columns offset-by-one">
					<?php if($post->post_excerpt) : ?>
						<section id="post-excerpt">
							<?php the_excerpt(); ?>
						</section>
					<?php endif; ?>
					<aside id="post-meta">
						<p class="post-author">
							<span><?php _e('by', 'landquest'); ?> <?php the_author(); ?></span>
						</p>
						<p class="post-date">
							<span><?php the_date(); ?></span>
						</p>
					</aside>
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	</article>

<?php endif; ?>

<?php get_footer(); ?>