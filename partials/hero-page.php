<section class="hero-page" id="hero-page">
	<div class="container hero-page__container">
		<div class="hero-page__breadcrumbs breadcrumbs">
			<?php if (function_exists('bcn_display')) {
				bcn_display();
			} ?>
		</div>
		<h1 class="hero-page__title title-2">
			<?php the_title(); ?>
		</h1>
	</div>
</section>