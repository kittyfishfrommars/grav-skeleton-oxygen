// import packages
const config = require('../gulp.config.json');
const { watch, series, parallel } = require('gulp');
const { reload } = require('./browsersync.js');
const { compileCSS } = require('./sass.js');
const { compileJS } = require('./concat.js');
const { lintCSS, lintCSSAll } = require('./stylelint.js');

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

// TODO: watch CSS separately, lint modified file only
function watchCSS1() {
	return watch(config.path.scss, {
			interval: 1000,
			usePolling: true
		}).on('all', function(stats, path) {
			console.log(`File ${path} was changed`);
			lintCSS(path);
			series(
				compileCSS,
				reload
			)
	   });
};

// TODO: watch CSS separately, lint all files
function watchCSS() {
 	return watch(config.path.scss, {
			interval: 1000,
			usePolling: true
		},						
		series(
			lintCSSAll,
			compileCSS,
			reload		
		)
	)
};

exports.watchCSS = watchCSS;

// watch JS separately
// TODO: add lintJS
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