<?php
$page = 'options';

$title = get_field('thank-you-page_title', $page) ?? get_bloginfo('name');
$descr = get_field('thank-you-page_descr', $page) ?? get_bloginfo('description');
$btn = get_field('thank-you-page_btn', $page) ?? '';

$media = get_field('hero_media', $page) ?? '';

?>
<section class="hero" id="hero">
	<div class="container hero__container">
		<div class="hero__content">
			<h1 class="hero__title title-1">
				<?php echo esc_html($title) ?>
			</h1>
			<div class="hero__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<a class="hero__btn btn" href="<?php echo esc_url($btn['url']) ?>">
				<?php echo esc_html($btn['title']) ?>
			</a>
		</div>
		<?php if ($media): ?>
			<div class="hero__media hero-media">
				<div class="hero-media__col">
					<div class="hero-media__image image-box">
						<?php echo wp_get_attachment_image(
							$media['image_1']['ID'],
							'large',
							false,
							array(
								'class' => 'img',
								'alt' => $media['image_1']['alt'] ?: $title
							)
						); ?>
					</div>
					<div class=" hero-media__image image-box">
						<?php echo wp_get_attachment_image(
							$media['image_2']['ID'],
							'large',
							false,
							array(
								'class' => 'img',
								'alt' => $media['image_2']['alt'] ?: $title
							)
						); ?>
					</div>
				</div>
				<div class="hero-media__col">
					<span class="hero-media__label icon icon--after icon--label-check">
						<?php echo esc_html($media['label']) ?>
					</span>
					<div class="hero-media__image image-box">
						<?php echo wp_get_attachment_image(
							$media['image_3']['ID'],
							'large',
							false,
							array(
								'class' => 'img',
								'alt' => $media['image_3']['alt'] ?: $title
							)
						); ?>
					</div>
					<div class="hero-media__color-box">
						<?php if ($media['colors']): ?>
							<div class="hero-media__color-list">
								<?php foreach ($media['colors'] as $item): ?>
									<div class="hero-media__color-item" style="background-color:<?php echo esc_attr($item['color']); ?>;">
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
						<?php if ($media['colors_text']): ?>
							<p class="hero-media__color-text">
								<?php echo esc_html($media['colors_text']) ?>
							</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>