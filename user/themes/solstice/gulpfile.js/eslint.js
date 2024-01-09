// import packages
const config = require('../gulp.config.json');
const { src, dest } = require('gulp');
const eslint = require('gulp-eslint-new');
const cache = require('gulp-cached');

// TODO: implement eslint, below is just dummy code

// JS Linter
// Man: https://github.com/origin-1/gulp-eslint-new
// ESlint Generator: https://maximgatilin.github.io/stylelint-config/
// lint all css
function lintJS() {
	console.log('TODO: eslint');
};

exports.lintJS = lintJS;

// invoke fixes where possible
function fixJS() {
	console.log('TODO: eslin fixt');
};

exports.fixCJS = fixJS;