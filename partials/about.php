<?php
$page = 'options';

$title = get_field('about_title', $page) ?? '';
$descr = get_field('about_descr', $page) ?? '';
$image = get_field('about_image', $page) ?? '';

?>
<?php if ($descr): ?>
	<section class="section about" id="about">
		<div class="container about__container">
			<div class="about__image image-box">
				<?php echo wp_get_attachment_image(
					$image['ID'],
					'large',
					false,
					array(
						'class' => 'img',
						'alt' => $image['alt'] ?: esc_html($title)
					)
				); ?>
			</div>
			<div class="about__content">
				<h2 class="about__title title-2">
					<?php echo esc_html($title) ?>
				</h2>
				<div class="about__descr descr">
					<?php echo wp_kses_post($descr) ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>