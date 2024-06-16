function faqTabs() {
	const handlers = document.querySelectorAll('.faq-handler');
	const panels = document.querySelectorAll('.faq-panel');

	if (!panels || !handlers) return;

	function activateTab(element) {

		if (!element) return;

		element.classList.replace('border-background-card_1', 'border-primary-0');
		element.classList.replace('text-primary-50', 'text-primary-20');
	}

	function deActivateTab(element) {
		if (!element) return;

		element.classList.replace('border-primary-0', 'border-background-card_1');
		element.classList.replace('text-primary-20', 'text-primary-50');
	}

	function activatePanel(element) {
		if (!element) return;

		element.classList.replace('grid-rows-[0fr]', 'grid-rows-[1fr]');
	}

	function deActivatePanel(element) {
		if (!element) return;

		element.classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
	}

	activateTab(handlers[0]);
	activatePanel(panels[0]);

	handlers.forEach((handler) => {
		handler.addEventListener('click', () => {
			//disable others handlers
			handlers.forEach((innerHandler) => deActivateTab(innerHandler));

			//enable clicked handler
			activateTab(handler);

			//enable related panel
			panels.forEach((panel) => {
				const isRelatedPanel =
					panel.getAttribute('controlled-by') === handler.id;

				if (isRelatedPanel) {
					activatePanel(panel);
				} else {
					deActivatePanel(panel);
				}
			});
		});
	});
}

function faqCard() {
	const faqCards = document.querySelectorAll('.faq-card');
	if (!faqCards) return;

	function activateFaq(faq, expert) {
		expert.classList.replace('grid-rows-[0fr]', 'grid-rows-[1fr]');
		faq.querySelector('svg')?.classList.add('rotate-45', 'text-accent-50');
	}

	function deActivateFaq(faq, expert) {
		expert.classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
		faq.querySelector('svg')?.classList.remove('rotate-45', 'text-accent-50');
	}

	faqCards.forEach((faq) => {
		const faqToggle = faq.querySelector('.faq-toggle');
		const expert = faq.querySelector('.faq-expert');
		if (!expert) return;

		faqToggle?.addEventListener('click', () => {
			const faqIsActive = expert.classList.contains('grid-rows-[1fr]');

			if (faqIsActive) {
				deActivateFaq(faq, expert);
			} else {
				activateFaq(faq, expert);
			}
		});
	});
}

faqTabs();
faqCard();
