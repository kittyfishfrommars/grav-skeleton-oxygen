// import packages
const config = require('../gulp.config.json');
const { src, dest } = require('gulp');
const concat = require('gulp-concat');
const terser = require('gulp-terser');

// JS task: concatenates and uglifies JS files to script.js
// concat: combine into single file
// terser: minify
function compileJS() {
	let options = {
		sourcemaps: process.env.NODE_ENV === 'dev' || false,
	};

	return src(
			config.path.js,
			{
				sourcemaps: options.sourcemaps
			}
		)
		.pipe(concat('scripts.js'))
		.pipe(terser())
		.pipe(dest(config.path.dist + '/js', {
			sourcemaps: '.'
		}));
}

exports.compileJS = compileJS;