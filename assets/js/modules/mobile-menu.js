const mobileMenu = document.querySelector('#mobileMenu');

function mobileMenuToggle() {
	const mobileMenuOpener = document.querySelector('#mobileMenuOpener');
	const mobileMenuCloser = document.querySelector('#mobileMenuCloser');

	if (!mobileMenuCloser || !mobileMenuOpener || !mobileMenu) return;

	mobileMenuOpener.addEventListener('click', () => {
		mobileMenu.classList.replace(
			'[clip-path:polygon(100%_0%_,100%_0_,100%_100%,_100%_100%)]',
			'[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]'
		);
	});

	mobileMenuCloser.addEventListener('click', () => {
		mobileMenu.classList.replace(
			'[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]',
			'[clip-path:polygon(100%_0%_,100%_0_,100%_100%,_100%_100%)]'
		);
	});
}

mobileMenuToggle();

function mobileMenuAccordion() {
	if (!mobileMenu) return;

	const menuItemsHasChild = mobileMenu.querySelectorAll('.has-child');

	menuItemsHasChild.forEach((menuItem) => {
		menuItem.addEventListener('click', () => {
			const accordion = menuItem.querySelector('.accordion');
			const svg = menuItem.querySelector('svg');

			if (!accordion || !svg) return;

			const isOpen = accordion.classList.contains('grid-rows-[0fr]');
			if (isOpen) {
				accordion.classList.replace('grid-rows-[0fr]', 'grid-rows-[1fr]');
				svg.classList.add('rotate-180');
			} else {
				accordion.classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
				svg.classList.remove('rotate-180');
			}
		});
	});
}

mobileMenuAccordion();
