<?php
$page = 'options';

$title = get_field('reviews_title', $page) ?? '';
$descr = get_field('reviews_descr', $page) ?? '';
$list = get_field('reviews_list', $page) ?? '';

?>
<section class="section reviews" id="reviews">
	<div class="container reviews__container">
		<div class="reviews__body">
			<div class="reviews__col">
				<h2 class="reviews__title title-2">
					<?php echo esc_html($title) ?>
				</h2>
				<div class="reviews__descr descr">
					<?php echo wp_kses_post($descr)?>
				</div>
			</div>
			<ul class="reviews__list">
				<?php foreach ($list as $item): ?>
					<li class="reviews__item reviews-item">
						<div class="reviews-item__logo">
							<?php echo wp_get_attachment_image(
								$item['logo']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['logo']['alt'] ?: $item['text']
								)
							); ?>
							<?php echo wp_get_attachment_image(
								$item['rating']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['rating']['alt'] ?: $item['text']
								)
							); ?>
						</div>
						<p class="reviews-item__text">
							<?php echo esc_html($item['text'])?>
						</p>
						<a class="btn reviews-item__btn" href="<?php echo esc_url($item['btn']['url'])?>" target="_blank" style="--bg-color: <?php echo esc_attr($item['color'])?>; --hover-color: <?php echo esc_attr($item['color_hover'])?>;">
							<?php echo esc_html($item['btn']['title'])?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>