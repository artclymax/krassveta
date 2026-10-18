<?php
$descr = get_field('footer_descr', 'options') ?? '';
$nav = get_field('footer_nav', 'options') ?? '';
$contacts = get_field('footer_contacts', 'options') ?? '';
$unp = get_field('footer_unp', 'options') ?? '';
$copy = get_field('footer_copy', 'options') ?? '';
$links = get_field('footer_links', 'options') ?? '';

$phones = get_field('contacts_phones', 'options') ?? '';
$email = get_field('contacts_email', 'options') ?? '';
$address = get_field('contacts_address', 'options') ?? '';
$social = get_field('contacts_social', 'options') ?? '';
?>
</main>

<footer class="footer">
	<div class="container footer__container">
		<div class="footer__top">
			<div class="footer__info">
				<div class="footer__logo logo">
					<?php mx_logo(); ?>
				</div>
				<div class="footer__descr descr">
					<?php echo wp_kses_post($descr) ?>
				</div>
			</div>
			<nav class="footer__menu footer-menu">
				<h3 class="footer__title title-3">
					<?php echo esc_html($nav['title']) ?>
				</h3>
				<?php
				$menu = wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'container' => false,
						'menu_class' => 'footer-menu__list',
						'depth' => 1
					)
				);
				echo htmlspecialchars($menu); ?>
			</nav>
			<div class="footer__contacts">
				<h3 class="footer__title title-3">
					<?php echo esc_html($contacts['title']) ?>
				</h3>
				<ul class="footer__contacts-list">
					<?php if ($phones): ?>
						<li class="contacts-footer__item contacts-footer-item icon icon--phone">
							<div class="contacts-footer-item__wrapper">
								<?php get_template_part('partials/phone-box', null, ['class' => 'contacts-footer__phone-box']); ?>
							</div>
						</li>
					<?php endif; ?>
					<?php if ($email): ?>
						<li class="contacts-footer__item contacts-footer-item icon icon--email">
							<div class="contacts-footer-item__wrapper">
								<a class="contacts-footer-item__link link" href="mailto:<?php echo esc_attr($email) ?>">
									<?php echo esc_html($email) ?>
								</a>
							</div>
						</li>
					<?php endif; ?>
					<?php if ($address): ?>
						<li class="contacts-footer__item contacts-footer-item icon icon--address">
							<div class="contacts-footer-item__wrapper">
								<address class="contacts-footer-item__address descr">
									<?php echo wp_kses_post($address) ?>
								</address>
							</div>
						</li>
					<?php endif; ?>
					<?php if ($social): ?>
						<li class="contacts-footer__item contacts-footer-item">
							<ul class="contacts-footer__list social-list">
								<?php foreach ($social as $item): ?>
									<li class="social-list__item" style="--icon-bg: url('<?php echo esc_attr($item['image']) ?>');">
										<a class="social-list__link icon" href="<?php echo esc_url($item['link']['url']) ?>"
											target="_blank">
											<span class="link">
												<?php echo esc_html($item['link']['title']) ?>
											</span>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="footer__col">
				<p class="footer__unp">
					<?php echo esc_html($unp) ?>
				</p>
				<small class="footer__copy">
					&copy; <?php echo date('Y') . ' ' . esc_html($copy) ?>
				</small>
			</div>
			<?php if ($links): ?>
				<div class="footer__links">
					<?php foreach ($links as $item): ?>
						<a class="footer__link" href="<?php echo esc_url($item['link']['url']) ?>" target="_blank">
							<?php echo esc_html($item['link']['title']) ?>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</footer>



<?php get_template_part('partials/modal-pick-color') ?>
<?php get_template_part('partials/modal-call') ?>
<?php get_template_part('partials/scroll-to-top') ?>
<?php get_template_part('partials/cookie-banner') ?>

<?php wp_footer(); ?>
</body>

</html>