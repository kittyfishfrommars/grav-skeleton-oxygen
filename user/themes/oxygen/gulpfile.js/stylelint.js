// import packages
const config = require('../gulp.config.json');
const { src, dest } = require('gulp');
const stylelint = require('@ronilaukkarinen/gulp-stylelint');
const stylelintFormatter = require('stylelint-formatter-pretty');
const cache = require('gulp-cached');

// CSS Linter
// Man: https://doc.esdoc.org/github.com/olegskl/gulp-stylelint/
// Stylelint Generator: https://maximgatilin.github.io/stylelint-config/

// lint all css
function lintCSS() {
	return src(config.path.scss)
		.pipe(cache('lint-css'))
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

// invoke fixes where possible
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