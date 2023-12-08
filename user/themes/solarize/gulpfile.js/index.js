// Gulp 4 API functions
// Write as series() instead of gulp.series()
const { src, dest, watch, series, parallel } = require('gulp');

// import functions from individual files
const { lintCSS, fixCSS } = require('./stylelint.js');
const { compileSCSS } = require('./sass.js');
const { compileJS } = require('./concat.js');
// const { fingerprint } = require('./replace.js');
const { server } = require('./browsersync.js');
const { watcher } = require('./watch.js');

// TODO: implement gulp-eslint
function lintJS(cb) {
	// dummy
	cb();
};

// TODO: fixJS

// TODO: implement gulp-yaml-lint
function lintYAML(cb) {
	// dummy
	cb();
};


// TODO: implement fixJS via gulp-eslint fix
// automagically rewrites source files to be lint-compliant where possible
exports.fix = series(
	parallel(
		fixCSS,
	),
);

// Spins up a local Browsersync server
// Run "gulp watch" on the command line
exports.serve = series(
	parallel(
		compileSCSS,
		compileJS
	),
	server,
	lintYAML,
	lintCSS,
	lintJS,
	parallel(
		watcher.html,
		watcher.css,
		watcher.js
	)
);

// TODO: implement babel (if necessary) / concat / uglify etc., check built files (?)
// Exports assets once
// Run "gulp build" on the command line
exports.build = series(
	parallel(
		compileSCSS,
		compileJS
	)
);

// mirror default task from build task
// Run "gulp" on the command line
exports.default = exports.build;