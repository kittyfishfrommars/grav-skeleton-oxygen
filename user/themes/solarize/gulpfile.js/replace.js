// TODO: make target files configurable, if needed
// const config = require('../gulp.config.json');
// import packages
const replace = require('gulp-replace');

// Cachebuster
function fingerprint() {
	var cbString = new Date().getTime();
	return src(['index.html'])
		.pipe(replace(/cb=\d+/g, 'cb=' + cbString))
		.pipe(dest('.'));
}

exports.fingerprint = fingerprint;