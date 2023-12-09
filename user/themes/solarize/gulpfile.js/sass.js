// import packages
const config = require('../gulp.config.json');
const { src, dest } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');

// SASS/SCSS task: compiles SCSS into CSS files
// postcss: handles plugins autoprefixer and cssnano
// autoprefixer: get options from package.json
// cssnano: PostCSS plugins
function compileSCSS() {
	return src(config.path.scss, {
			sourcemaps: true
		}) // set source and turn on sourcemaps
		.pipe(sass())
		.pipe(postcss([
			autoprefixer(),
			cssnano()
		]))
		.pipe(dest(config.path.dist + '/css', {
			sourcemaps: '.'
		})); // put final CSS in dist folder with sourcemap
}

exports.compileSCSS = compileSCSS;