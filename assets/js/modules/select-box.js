function selectBox() {
	const selectBoxGroup = document.querySelectorAll('.select-box');
	if (!selectBoxGroup) return;

	function toggleActivatePanel(panel) {
		panel.classList.toggle('opacity-0');
		panel.classList.toggle('-translate-y-4');
		panel.classList.toggle('pointer-events-none');
	}

	selectBoxGroup.forEach((selectBox) => {
		const selector = selectBox.querySelector('.select-box-selector');
		const panel = selectBox.querySelector('.select-box-panel');
		const value = selectBox.querySelector('.select-box-value');
		const options = selectBox.querySelectorAll('.select-box-option');

		selector.addEventListener('click', () => {
			toggleActivatePanel(panel);
		});

		options.forEach((option) => {
			option.addEventListener('click', () => {
				value.innerText = option.innerText;

				toggleActivatePanel(panel);
			});
		});
	});
}

selectBox();
