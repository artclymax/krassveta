//import 'jarallax/dist/jarallax.min.css';
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import './scss/style.scss';
//!
//import { Swiper } from "swiper/bundle";

//import { jarallax } from "jarallax";
import { Fancybox } from "@fancyapps/ui/dist/fancybox/";

import { AutoCalc } from "./js/AutoCalc.js";
import { Menu } from './js/Menu.js';
//import { RunningLine } from './js/RunningLine.js';
//import { BackdropList } from './js/BackdropList.js';
import { Modal } from './js/Modal.js';
import { cookies } from "./js/Cookies.js";
import { imask } from "./js/imask.js";
import { fileBtn } from "./js/FileBtn.js";
//import { CustomFieldSelect } from "./js/CustomFieldSelect.js";
//import { Spoiler } from './js/Spoiler.js';
import { ScrollToTop } from './js/ScrollToTop.js';
import { MXSwiper } from './js/MXSwiper.js';
//import { CustomSelect } from './js/CustomSelect.js';
//import { Tabs } from './js/Tabs.js';

// FOR CONTACTS FORM 7
//import "./js/redirect-to-thanks-page.js";

new AutoCalc();
//new CustomFieldSelect({
//	input: '.form-wrapper .cf-select',
//	hasPlaceholder: false
//});
new Menu({
	btn: '.burger-btn',
	menu: '.header-menu',
	activeClass: 'open-header-menu',
})


//new BackdropList();

new Modal();

//jarallax(document.querySelectorAll('.jarallax'), {
//	speed: 0.2,
//});

cookies();
imask();

Fancybox.bind("[data-fancybox]");

//new RunningLine();
new ScrollToTop();

//new Spoiler();

new MXSwiper();
//new CustomSelect({
//	selector: 'select'
//});
/*
window.addEventListener('scroll', function () {
	const header = document.querySelector('.header');

	if (window.scrollY > 50) {
		header.classList.add('scrolled');
	} else {
		header.classList.remove('scrolled');
		const valueUnits = header.offsetHeight;
		document.querySelector(':root').style.setProperty(`--header-height`, valueUnits + 'px');
	}
});
*/

fileBtn();

//new Tabs();
//document.querySelectorAll('video.wp-video-shortcode').forEach(video => {
//	if (!video.src) {
//		const link = video.querySelector('a');
//		if (link) video.src = link.href;
//	}
//});