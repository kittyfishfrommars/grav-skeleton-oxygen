// import packages
const config = require('../gulp.config.json');
const { src, dest } = require('gulp');
const concat = require('gulp-concat');
const terser = require('gulp-terser');

// JS task: concatenates and uglifies JS files to script.js
// concat: combine into single file
// terser: minify and add sourcemaps
function compileJS() {
	return src(
			config.path.js,
			{
				sourcemaps: true
			}
		)
		.pipe(concat('scripts.js'))
		.pipe(terser())
		.pipe(dest(config.path.dist + '/js', {
			sourcemaps: '.'
		}));
}

exports.compileJS = compileJS;