const config = require('../gulp.config.json');
const replace = require('gulp-replace');

// Cachebuster
function fingerprint() {
	var fpString = new Date().getTime();
	return src(['config.path.fingerprint'])
		.pipe(replace(/fp=\d+/g, 'fp=' + fpString))
		.pipe(dest('.'));
}

exports.fingerprint = fingerprint;