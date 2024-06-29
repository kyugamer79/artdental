function taxTerm() {

    const terms = document.querySelectorAll('.term');
    if (!terms) return;

    function activeTax(termToggle, termPanel) {
        termPanel.classList.replace('grid-rows-[0fr]', 'grid-rows-[1fr]');
        termToggle.querySelector('svg')?.classList.add('rotate-180', 'text-accent-50');
        termToggle.querySelector('.title')?.classList.add('text-accent-50');
    }

    function deActiveTax(termToggle, termPanel) {
        termPanel.classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
        termToggle.querySelector('svg')?.classList.remove('rotate-180', 'text-accent-50');
        termToggle.querySelector('.title')?.classList.remove('text-accent-50');
    }

    terms.forEach((term) => {
        const termToggle = term.querySelector('.term-title');
        const termPanel = term.querySelector('.term-panel');

        termToggle?.addEventListener('click', () => {
            const termIsActive = termPanel.classList.contains('grid-rows-[1fr]');

            if (termIsActive) {
                deActiveTax(termToggle, termPanel);
            } else {
                activeTax(termToggle, termPanel);
            }
        });
    });

}

taxTerm();

