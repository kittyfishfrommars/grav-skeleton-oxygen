// Gulp 4 API functions
// Write as series() instead of gulp.series()
const { series, parallel } = require('gulp');

// import functions from individual files
const { cleanDist } = require('./clean.js');
const { lintCSS, fixCSS } = require('./stylelint.js');
const { compileCSS } = require('./sass.js');
const { compileJS } = require('./concat.js');
const { fingerprint } = require('./replace.js');
const { open } = require('./browsersync.js');
const { watchHTML, watchCSS, watchJS } = require('./watch.js');
const { wgetSH } = require('./exec.js');

// set environment
process.env.NODE_ENV = process.env.NODE_ENV || 'dev';

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
	)
);

// Run "npm run deploy" on the command line
exports.deploy = series(
	cleanDist,
	parallel(
		compileCSS,
		compileJS,
		fingerprint
	)
);

// TODO: implement CI: lftp / git-sync or github actions

// Run "npm run wget" or "gulp wget" on the command line
// exports.build,
exports.wget = series(
	exports.deploy, 
	series(
		wgetSH
));

// opens up a local browsersync server in a new tab
// Run "gulp serve" on the command line
exports.serve = series(
	cleanDist,
 	parallel(
		compileCSS,
		compileJS
	),
	series(
		open,
		lintCSS
	),
	parallel(
		watchHTML,
		watchCSS,
		watchJS
	)
);

// mirror default task from serve task
// Run "gulp" on the command line
exports.default = exports.serve;