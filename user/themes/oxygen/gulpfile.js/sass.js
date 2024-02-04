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
function compileCSS(cb) {
	let isDev = (process.env.NODE_ENV === 'dev' || false);
	let options = {
		sourcemaps: isDev,
		cssnano: {
			mergeIdents: true
		}
	};

	return src(config.path.scss, {
			sourcemaps: options.sourcemaps
		})
		.pipe(sass())
		.pipe(postcss([
			autoprefixer(),
			cssnano(options.cssnano)
		]))
		.pipe(dest(config.path.dist + '/css', {
			sourcemaps: '.'
		}))
		.on('end', function() {
            cb();
       });
};

exports.compileCSS = compileCSS;