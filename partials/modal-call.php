<?php
$title = get_field('modal_call_title', 'options') ?? '';
$descr = get_field('modal_call_descr', 'options') ?? '';
?>
<div class="modal" id="modal-call" data-modal>
	<div class="modal__box modal-call__box" data-modal-box>
		<button class="modal-call__close-btn modal__close-btn modal-close-btn" data-modal-close aria-label="Закрыть">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M10 10L19 19M10 10L1 1M10 10L1 19M10 10L19 1" stroke="currentColor" stroke-width="2"
					stroke-linecap="round" />
			</svg>
		</button>
		<div class="modal__body">
			<h3 class="modal__title title-2">
				<?php echo esc_html($title) ?>
			</h3>
			<div class="modal__descr-box descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<div class="modal__form">
				<?php echo do_shortcode('[contact-form-7 id="f76964c" title="Заказать звонок"]') ?>
			</div>
		</div>
	</div>
</div>