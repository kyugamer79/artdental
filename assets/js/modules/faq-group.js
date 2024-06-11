function faqTabs() {
	const handlers = document.querySelectorAll('.faq-handler');
	const panels = document.querySelectorAll('.faq-panel');

	if (!panels || !handlers) return;

	function activateTab(element) {
		element.classList.replace('border-background-card_1', 'border-primary-0');
		element.classList.replace('text-primary-50', 'text-primary-20');
	}

	function deActivateTab(element) {
		element.classList.replace('border-primary-0', 'border-background-card_1');
		element.classList.replace('text-primary-20', 'text-primary-50');
	}

	function activatePanel(element) {
		element.classList.replace('grid-rows-[0fr]', 'grid-rows-[1fr]');
	}

	function deActivatePanel(element) {
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
				if (panel.getAttribute('controlled-by') === handler.id) {
					activatePanel(panel);
				} else {
					deActivatePanel(panel);
				}
			});
		});
	});
}

faqTabs();

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
		faqToggle?.addEventListener('click', () => {
			const expert = faq.querySelector('.faq-expert');
			if (!expert) return;

			const isActive = expert.classList.contains('grid-rows-[1fr]');

			if (isActive) {
				deActivateFaq(faq, expert);
			} else {
				activateFaq(faq, expert);
			}
		});
	});
}

faqCard();
