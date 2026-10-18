<?php
$page = 'options';

$title = get_field('benefits_title', $page) ?? '';
$list = get_field('benefits_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section benefits" id="benefits">
		<div class="container benefits__container">
			<h2 class="benefits__title title-2 t-center">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="benefits__list grid">
				<?php foreach ($list as $item): ?>
					<li class="benefits__item benefits-item">
						<div class="benefits-item__header">
							<div class="benefits-item__image">
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
							<h3 class="benefits-item__title title-3">
								<?php echo esc_html($item['title']) ?>
							</h3>
						</div>
						<div class="descr benefits-item__descr">
							<?php echo wp_kses_post($item['descr']) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>