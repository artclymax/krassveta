<?php
$page = 'options';

$title = get_field('pick_color_title', $page) ?? '';
$descr = get_field('pick_color_descr', $page) ?? '';
$list = get_field('pick_color_list', $page) ?? '';

?>
<section class="pick-color" id="pick-color">
	<div class="container pick-color__container">
		<h2 class="pick-color__title title-2 t-center">
			<?php echo esc_html($title) ?>
		</h2>
		<div class="pick-color__descr descr t-center">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<div class="pick-color__wrapper">
			<?php if ($list): ?>
				<ol class="pick-color__list">
					<?php foreach ($list as $item): ?>
						<li class="pick-color__item pick-color-step">
							<div class="pick-color-step__wrapper">
								<h3 class="pick-color-step__title title-3">
									<?php echo esc_html($item['title']) ?>
								</h3>
								<div class="pick-color-step__descr descr">
									<?php echo wp_kses_post($item['descr']) ?>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ol>
			<?php endif; ?>
			<div class="pick-color__form">
				<?php echo do_shortcode('[contact-form-7 id="c503d8a" title="Подобрать цвет"]') ?>
			</div>
		</div>
	</div>
</section>