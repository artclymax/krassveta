<?php get_header(); ?>


<?php if (have_posts()): ?>
	<?php while (have_posts()):
		the_post(); ?>
		<div class="container descr index-section">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php else: ?>
	<div class="container descr index-section">
		<p>Записей не найдено.</p>
	</div>
<?php endif; ?>


<?php get_footer(); ?>