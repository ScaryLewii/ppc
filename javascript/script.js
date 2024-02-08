/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
import Splide from '@splidejs/splide';

document.addEventListener("DOMContentLoaded", () => {
	const mainNavControl = document.querySelector('#main-nav-control')
	const mainNav = document.querySelector('#main-nav')

	mainNavControl.addEventListener('click', () => {
		mainNav.classList.toggle('mobile-shown')
	})

	document.querySelectorAll('.splide').forEach(el => {
		new Splide( el, {
			perPage: 5,
			gap: '20px',
			focus: 'center',
		} ).mount();
	})
})