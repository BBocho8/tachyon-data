/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./site/templates/**/*.php", // Include template files
		"./site/snippets/**/*.php", // Include snippet files
		"./site/plugins/**/*.php", // Include plugin files
		"./content/**/*.txt", // Include content files
		"./assets/**/*.js", // Include JS files
		"./assets/**/*.css", // Include CSS files
	],
	theme: {
		extend: {
			height: {
				navbarHeight: "150px",
			},
			padding: {
				navbarPadding: "150px",
			},

			fontFamily: {
				manrope: ["Manrope", "sans-serif"], // Add Manrope font
				playfair: ["Playfair Display", "serif"], // Add Playfair Display font
				openSans: ["Open Sans", "sans-serif"], // Add Open Sans font
			},

			colors: {
				primary: {
					DEFAULT: "#900B52", // Base primary color
					100: "#f2e0eb", // Lighter tone (very light purple)
					200: "#e5c1d7", // Light tone
					300: "#d8a2c3", // Slightly lighter tone
					400: "#cb83af", // Lightest tone
					500: "#900B52", // Base primary color
					600: "#7a0946", // Slightly darker tone
					700: "#63073a", // Dark tone
					800: "#4d052e", // Darker tone
					900: "#360322", // Darkest tone
				},
				lightGrey: "#d2d6dd",
				grey: "#747681",
				darkGrey: "#3f4144",
				error: "#ff5630",
				success: "#22c55e",
			},
			backgroundColor: {
				bgColor: "#ffffff",
				bgSecondaryColor: "#f3f3f6",
			},
		},
	},
	plugins: [require("@tailwindcss/typography")],
};
