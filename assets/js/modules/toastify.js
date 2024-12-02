import Toastify from 'toastify-js';

const successColor = '#4caf50';
const errorColor = '#ef5350';

export const successToast = Toastify({
	text: 'عملیات با موفقیت انجام شد',
	style: {
		// zIndex: 100,
		background: successColor,
	},
});

export const errorToast = Toastify({
	text: 'عملیات با خطا مواجه شد',
	style: {
		// zIndex: 100,
		background: errorColor,
	},
});

export const successFormToast = Toastify({
	text: 'فرم با موفقیت ارسال شد',
	style: {
		// zIndex: 100,
		background: successColor,
	},
});
