<?php
$page = 'options';

$title = get_field('contacts_title', $page) ?? '';
$descr = get_field('contacts_descr', $page) ?? '';
$map = get_field('contacts_map', $page) ?? '';

$phones = get_field('contacts_phones', 'options') ?? '';
$phones_note = get_field('contacts_phones_note', 'options') ?? '';

$email = get_field('contacts_email', 'options') ?? '';
$email_note = get_field('contacts_email_note', 'options') ?? '';

$address = get_field('contacts_address', 'options') ?? '';
$address_note = get_field('contacts_address_note', 'options') ?? '';

$social = get_field('contacts_social', 'options') ?? '';
?>
<section class="contacts" id="contacts">
	<div class="container contacts__container">
		<div class="contacts__header">
			<h2 class="contacts__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="contacts__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
		</div>
		<div class="contacts__body">
			<ul class="contacts__list">
				<?php if ($phones): ?>
					<li class="contacts__item contacts-item icon icon--phone">
						<div class="contacts-item__wrapper">
							<?php get_template_part('partials/phone-box', null, ['class' => 'contacts__phone-box']); ?>
							<div class="contacts-item__descr descr">
								<?php echo wp_kses_post($phones_note) ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
				<?php if ($email): ?>
					<li class="contacts__item contacts-item icon icon--email">
						<div class="contacts-item__wrapper">
							<a class="contacts-item__link link" href="mailto:<?php echo esc_attr($email) ?>">
								<?php echo esc_html($email) ?>
							</a>
							<div class="contacts-item__descr descr">
								<?php echo wp_kses_post($email_note) ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
				<?php if ($address): ?>
					<li class="contacts__item contacts-item icon icon--address">
						<div class="contacts-item__wrapper">
							<address class="contacts-item__address descr">
								<?php echo wp_kses_post($address) ?>
							</address>
							<div class="contacts-item__descr descr">
								<?php echo wp_kses_post($address_note) ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
				<?php if ($social): ?>
					<li class="contacts__item contacts-item">
						<ul class="contacts__list social-list">
							<?php foreach ($social as $item): ?>
								<li class="social-list__item" style="--icon-bg: url('<?php echo esc_attr($item['image']) ?>');">
									<a class="social-list__link icon" href="<?php echo esc_url($item['link']['url']) ?>"
										target="_blank">
										<span class="link"><?php echo esc_html($item['link']['title']) ?></span>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				<?php endif; ?>
			</ul>
			<div class="contacts__form">
				<?php echo do_shortcode('[contact-form-7 id="f76964c" title="Заказать звонок"]') ?>
			</div>
		</div>
		<div class="contacts__map">
			<?php echo wp_kses($map, [
				'iframe' => [
					'src' => true,
					'width' => true,
					'height' => true,
					'style' => true,
					'allowfullscreen' => true,
					'loading' => true,
				],
			]) ?>
		</div>
	</div>
</section>