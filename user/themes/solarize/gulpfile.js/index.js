// Gulp 4 API functions
// Write as series() instead of gulp.series()
const { series, parallel } = require('gulp');

// import functions from individual files
const { cleanDist } = require('./clean.js');
const { lintCSSAll, fixCSS } = require('./stylelint.js');
const { compileCSS } = require('./sass.js');
const { compileJS } = require('./concat.js');
// const { fingerprint } = require('./replace.js');
const { server } = require('./browsersync.js');
const { watchHTML, watchCSS, watchJS } = require('./watch.js');

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
	cleanDist,
 	parallel(
		compileCSS,
		compileJS
	),
	parallel(
		server,
		lintYAML,
		lintCSSAll,
		lintJS,	
	),
	parallel(
		watchHTML,
		watchCSS,
		watchJS,
	)
);

// 	parallel(
//	compileSCSS,
//	compileJS
// ),
// 

// TODO: implement babel (if necessary) / concat / uglify etc., check built files (?)
// Exports assets once
// Run "gulp build" on the command line
exports.build = series(
	cleanDist,
	parallel(
		compileCSS,
		compileJS
	)
);

// mirror default task from build task
// Run "gulp" on the command line
exports.default = exports.build;