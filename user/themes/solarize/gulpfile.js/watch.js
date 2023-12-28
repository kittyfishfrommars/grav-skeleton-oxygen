// import packages
const config = require('../gulp.config.json');
const { watch, series, parallel } = require('gulp');
const { reload } = require('./browsersync.js');
const { compileCSS } = require('./sass.js');
const { compileJS } = require('./concat.js');
const { lintCSS } = require('./stylelint.js');

// TODO: add lintJS
// Browsersync watch task
// usePolling: true makes docker work

// watch HTML separately
function watchHTML() {
	watch(config.path.html, {
			interval: 1000,
			usePolling: true
		},
		reload

	);
};

exports.watchHTML = watchHTML;

// watch CSS separately
function watchCSS() {
 	return watch(config.path.scss, {
			interval: 1000,
			usePolling: true
		},						
		series(
			compileCSS,
			reload,
			lintCSS,
		)
	)
};

exports.watchCSS = watchCSS;

// watch JS separately
// TODO: add eslint
function watchJS() {
	watch(config.path.js, {
			interval: 1000,
			usePolling: true
		},
		series(
			parallel(
				compileJS
			),
			reload
		)
	);
}

exports.watchJS = watchJS;