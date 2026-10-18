<?php
$page = 'options';

$title = get_field('hero_title', $page) ?? get_bloginfo('name');
$descr = get_field('hero_descr', $page) ?? get_bloginfo('description');
$benefits = get_field('hero_benefits', $page) ?? '';
$btn = get_field('hero_btn', $page) ?? '';
$note = get_field('hero_note', $page) ?? '';
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
			<?php if ($benefits): ?>
				<ul class="hero__benefits benefits-hero">
					<?php foreach ($benefits as $item): ?>
						<li class="benefits-hero__item">
							<div class="benefits-hero__icon">
								<?php echo wp_get_attachment_image(
									$item['image']['ID'],
									'large',
									false,
									array(
										'class' => 'img',
										'alt' => $item['image']['alt'] ?: $item['descr']
									)
								); ?>
							</div>
							<p class="benefits-hero__text">
								<?php echo esc_html($item['descr']) ?>
							</p>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<a class="hero__btn btn" href="<?php echo esc_url($btn['url']) ?>">
				<?php echo esc_html($btn['title']) ?>
			</a>
			<small class="hero__note">
				<?php echo esc_html($note) ?>
			</small>
		</div>
		<?php if ($media): ?>
			<div class="hero__media hero-media">
				<div class="hero-media__col">
					<div class=" hero-media__image image-box">
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