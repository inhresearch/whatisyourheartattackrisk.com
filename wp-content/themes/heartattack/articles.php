<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>

	<article>
        <h1>Helping You Better Understand Heart Health</h1>
		<?php // Display all articles  on the Articles page
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=7' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        
        <div class="articleBlock">
            <div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
            <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <p><a href="<?php the_permalink(); ?>">Read More</a></p>
        </div>
        

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>

<?php get_footer(); ?>

