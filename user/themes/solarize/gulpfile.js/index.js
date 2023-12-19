// Gulp 4 API functions
// Write as series() instead of gulp.series()
const { series, parallel } = require('gulp');

// import functions from individual files
const { cleanDist } = require('./clean.js');
const { lintCSSAll, fixCSS } = require('./stylelint.js');
const { compileCSS } = require('./sass.js');
const { compileJS } = require('./concat.js');
const { fingerprint } = require('./replace.js');
const { server } = require('./browsersync.js');
const { watchHTML, watchCSS, watchJS } = require('./watch.js');

// set environment
process.env.NODE_ENV = process.env.NODE_ENV || 'dev';

// TODO: implement gulp-eslint
function lintJS(cb) {
	// dummy
	cb();
};

// TODO: implement fixJS via gulp-eslint fix
// fix code style where possible
exports.fix = series(
	parallel(
		fixCSS,
	),
);

// TODO: implement babel (if necessary) / concat / uglify
// Run "npm run build" on the command line
exports.build = series(
	cleanDist,
	parallel(
		compileCSS,
		compileJS,
		fingerprint
	)
);

// opens up a local browsersync server in a new tab
// Run "gulp serve" on the command line
exports.serve = series(
	cleanDist,
 	parallel(
		compileCSS,
		compileJS
	),
	parallel(
		server,
		lintCSSAll,
		lintJS,	
	),
	parallel(
		watchHTML,
		watchCSS,
		watchJS,
	)
);

// mirror default task from serve task
// Run "gulp" on the command line
exports.default = exports.serve;