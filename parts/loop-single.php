<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
	<header class="article-header">	
		<p class="text-center"><?php the_post_thumbnail('full'); ?></p>
		<h1 class="entry-title single-title text-center" itemprop="headline"><?php the_title(); ?></h1>

		<?php get_template_part( 'parts/content', 'byline' ); ?>
		
	</header> <!-- end article header -->

	<div class="row">
		<div class="large-8 medium-10 columns medium-centered">
			<section class="entry-content" itemprop="articleBody">
				<?php the_content(); ?>
			</section> <!-- end article section -->
		</div>
	</div>

	
	
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
	
	<?php comments_template(); ?>	
	
</article> <!-- end article -->