// import packages
const config = require('../gulp.config.json');
const { watch, series, parallel } = require('gulp');
const { reload } = require('./browsersync.js');
const { compileSCSS } = require('./sass.js');
const { compileJS } = require('./concat.js');
const { lintCSS } = require('./stylelint.js');

// TODO: add lintYAML
// TODO: add lintJS
// Browsersync watch task
// usePolling: true makes docker work
const watcher = {
	// watch HTML separately
	html: function() {
		watch([config.path.html], {
				interval: 1000,
				usePolling: true
			},
			reload

		);
	},

	// watch CSS separately
	css: function() {
		watch([config.path.scss], {
				interval: 1000,
				usePolling: true
			},
			series(
				parallel(
					compileSCSS,
					lintCSS
				),
				reload
			)
		);
	},

	// watch JS separately
	// TODO: add lintJS
	js: function() {
		watch([config.path.js], {
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
}

exports.watcher = watcher;