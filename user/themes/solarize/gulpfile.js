// Gulp 4 API functions
// Write as series() instead of gulp.series()
const { src, dest, watch, series, parallel } = require('gulp');

// import packages
const stylelint = require('@ronilaukkarinen/gulp-stylelint');
const stylelintFormatter = require('stylelint-formatter-pretty');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const replace = require('gulp-replace');
const browsersync = require('browser-sync').create();

// File paths
const files = {
	htmlPath: 'index.html',
	scssPath: 'app/scss/**/*.scss',
	jsPath: 'app/js/**/*.js',
};

// CSS Linter
// Man: https://doc.esdoc.org/github.com/olegskl/gulp-stylelint/
// Stylelint Generator: https://maximgatilin.github.io/stylelint-config/
function lintCSS() {
    return src(files.scssPath)
		.pipe(stylelint({
			failAfterError: false,
			quietDeprecationWarnings: true,
			reporters: [{ 
				formatter: stylelintFormatter, 
				console: true
			}]
		}));
};

// CSS Linter - invoke fixes where possible
function fixCSS() {
    return src(files.scssPath, { base: './' })
		.pipe(stylelint({
			fix: true,
			failAfterError: false,
			quietDeprecationWarnings: true,
		}))
		.pipe(dest('.'));
};

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

// SASS/SCSS task: compiles SCSS into CSS files
// postcss: handles plugins autoprefixer and cssnano
// autoprefixer: get options from package.json
// cssnano: PostCSS plugins
function compileSCSS() {
	return src(files.scssPath, { sourcemaps: true }) // set source and turn on sourcemaps
		.pipe(sass())
		.pipe(postcss([
			autoprefixer(), 
			cssnano()
		]))
		.pipe(dest('dist', { sourcemaps: '.' })); // put final CSS in dist folder with sourcemap
}

// JS task: concatenates and uglifies JS files to script.js
// concat: combine into single file
// terser: minify and add sourcemaps
function compileJS() {
	return src(
		[
			files.jsPath,
			//,'!' + 'includes/js/jquery.min.js', // exclude specific files
		],
		{ sourcemaps: true }
	)
		.pipe(concat('scripts.js'))
		.pipe(terser())
		.pipe(dest('dist', { sourcemaps: '.' }));
}

// Cachebust
function cacheBust() {
	var cbString = new Date().getTime();
	return src(['index.html'])
		.pipe(replace(/cb=\d+/g, 'cb=' + cbString))
		.pipe(dest('.'));
}

// Browsersync to spin up a local server
function browserServe(cb) {
	// initializes browsersync server
	browsersync.init({
		server: {
			baseDir: '.',
		},
		notify: {
			styles: {
				top: 'auto',
				bottom: '0',
			},
		},
	});
	cb();
}

function browserReload(cb) {
	// reloads browsersync server
	browsersync.reload();
	cb();
}

// Browsersync Watch task
// usePolling: true makes docker work
function watchFiles() {
	// watch HTML separately
	watch([files.htmlPath], 
			{ interval: 1000, usePolling: true },
			series(
				lintYAML
			),
			browserReload

	);
	// watch CSS separately
	watch([files.scssPath],
			{ interval: 1000, usePolling: true },
		series(
			parallel(
				compileSCSS
			),
			lintCSS,
			browserReload
		)
	);
	// watch JS separately
	watch([files.jsPath],
			{ interval: 1000, usePolling: true },
		series(
			parallel(
				compileJS
			),
			lintJS,
			browserReload
		)
	);
}

// TODO: implement fixJS via gulp-eslint fix
// automagically rewrites source files to be lint-compliant where possible
exports.fix = series(	
	parallel(
		fixCSS,
	), 
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

// Spins up a local Browsersync server
// Run "gulp watch" on the command line
exports.serve = series(	
	parallel(
		compileSCSS, 
		compileJS
	), 
	browserServe,
	lintYAML,
	lintCSS,
	lintJS,
	watchFiles,
);

// mirror default task from serve task
// Run "gulp" on the command line
exports.default = exports.serve;
