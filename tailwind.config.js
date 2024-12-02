/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors');

module.exports = {
	plugins: [require('@tailwindcss/typography'), require('@tailwindcss/forms')],
	content: [
		'./partials/**/*.php',
		'./templates/**/*.php',
		'./assets/js/**/*.js',
		'./*.php',
	],

	theme: {
		container: {
			center: true,
			padding: '1rem',
		},
		colors: {
			primary: {
				0: '#0E0F10',
				10: '#25272D',
				20: '#3C3F49',
				30: '#535765',
				40: '#6A6F81',
				50: '#84899A',
				60: '#A0A4B1',
				70: '#BCBFC8',
				80: '#D8DADF',
				90: '#F4F4F6',
				100: '#FFFFFF',
			},
			accent: {
				0: '#010204',
				10: '#09142F',
				20: '#122659',
				30: '#1A3884',
				40: '#224AAF',
				50: '#2E5ED6',
				60: '#587FDF',
				70: '#83A0E7',
				80: '#AEC1EF',
				90: '#D9E2F7',
				100: '#FFFFFF',
			},
			background: {
				main: '#F6F7F9',
				card_1: '#FFFFFF',
				card_2: '#7C828B',
			},

			// black: colors.black,
		},
		fontFamily: {
			peyda: ['"Peyda-1" , sans'],
		},
		fontSize: {
			title_1: '64px',
			title_2: '58px',
			h1: '48px',
			h2: '36px',
			h3: '32px',
			h4: '28px',
			h5: '24px',
			h6: '20px',
			body: '20px',
			body_s: '16px',
			caption: '12px',
		},
		spacing: {
			0: '0',
			1: '4px',
			2: '8px',
			3: '12px',
			4: '16px',
			5: '20px',
			6: '24px',
			7: '28px',
			8: '32px',
			9: '36px',
			10: '40px',
			11: '44px',
			12: '56px',
			13: '64px',
			14: '72px',
			15: '80px',
			16: '100px',
			17: '120px',
		},
	},
	extend: {
		fontFamily: {
			peyda: ['Peyda', 'sans-serif'],
		},
		gridTemplateRows: {
			0: '0fr',
		},
		backgroundImage: {
			'cyn-noise': "url('../img/noise.png')",
		},
	},
};
