<?php
$page = 'options';

$title = get_field('products_title', $page) ?? '';
$btn = get_field('products_btn', $page) ?? '';
$list = get_field('products_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section products" id="products">
		<div class="container products__container">
			<h2 class="products__title title-2 t-center">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="products__list grid">
				<?php foreach ($list as $item): ?>
					<li class="products__item products-item">
						<div class="products-item__image image-box">
							<?php echo wp_get_attachment_image(
								$item['image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['image']['alt'] ?: $item['title']
								)
							); ?>
						</div>
						<div class="products-item__content">
							<span class="products-item__label"
								style="background-color: <?php echo esc_attr($item['color_bg']) ?>; color: <?php echo esc_attr($item['color']) ?>;">
								<?php echo esc_html($item['type']) ?>
							</span>
							<h3 class="products-item__title title-3">
								<?php echo esc_html($item['title']) ?>
							</h3>
							<div class="products-item__descr descr">
								<?php echo wp_kses_post($item['descr']) ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
			<a class="btn products__btn" href="<?php echo esc_url($btn['url']) ?>">
				<?php echo esc_html($btn['title']) ?>
			</a>
		</div>
	</section>
<?php endif; ?>