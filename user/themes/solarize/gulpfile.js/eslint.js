// import packages
const config = require('../gulp.config.json');
const { src, dest } = require('gulp');
const eslint = require('gulp-eslint-new');
const stylelintFormatter = require('stylelint-formatter-pretty');

// JS Linter
// Man: https://github.com/origin-1/gulp-eslint-new
// ESlint Generator: https://maximgatilin.github.io/stylelint-config/
function lintCSS() {
	return src(config.path.scss)
		.pipe(stylelint({
			failAfterError: false,
			quietDeprecationWarnings: true,
			reporters: [{
				formatter: stylelintFormatter,
				console: true
			}]
		}));
};

exports.lintCSS = lintCSS;

// CSS Linter - invoke fixes where possible
function fixCSS() {
	return src(config.path.scss, {
			base: './'
		})
		.pipe(stylelint({
			fix: true,
			failAfterError: false,
			quietDeprecationWarnings: true,
		}))
		.pipe(dest('.'));
};

exports.fixCSS = fixCSS;