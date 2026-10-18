export class Tabs {
	constructor(params) {
		const defaultParams = {
			tab: '[data-tab]',
			link: '[data-tab-link]',
			activeClass: 'active-tab',
		}

		this.params = { ...defaultParams, ...params };
		this.links = document.querySelectorAll(this.params.link);
		this.tabs = document.querySelectorAll(this.params.tab);

		this.init();
	}

	init() {
		if (!this.links.length) { return }

		this.links[0].classList.add(this.params.activeClass);
		this.tabs[0].classList.add(this.params.activeClass);

		document.addEventListener('click', e => {
			if (e.target.closest(this.params.link)) {
				e.preventDefault();

				const link = e.target.closest(this.params.link);
				const id = link.getAttribute('href');
				const tab = document.querySelector(this.params.tab + id);

				this.links.forEach(link => link.classList.remove(this.params.activeClass));
				link.classList.add(this.params.activeClass);

				this.tabs.forEach(tab => tab.classList.remove(this.params.activeClass));
				tab.classList.add(this.params.activeClass);
			}
		})
	}
}