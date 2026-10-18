<?php
$page = 'options';

$title = get_field('page-404_title', $page) ?? '';
$descr = get_field('page404_descr', $page) ?? '';
$btn = get_field('page404_btn', $page) ?? '';
$image = get_field('page404_image', $page) ?? '';

?>
<section class="page-404" id="page-404">
	<div class="container page-404__container">
		<div class="page-404__content">
			<div class="page-404__404">
				404
			</div>
			<h1 class="page-404__title title-1">
				<?php echo esc_html($title) ?>
			</h1>
			<div class="page-404__descr descr">
				<?php echo wp_kses_post($descr)?>
			</div>
			<a class="page-404__btn btn" href="<?php echo esc_url($btn['url'])?>">
				<?php echo esc_html($btn['title'])?>
			</a>
		</div>
		<div class="page-404__image image-box">
			<?php echo wp_get_attachment_image(
				$image['ID'],
				'large',
				false,
				array(
					'class' => 'img',
					'alt' => $image['alt'] ?: $title
				)
			); ?>
		</div>
	</div>
</section>