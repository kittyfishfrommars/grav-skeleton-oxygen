// const config = require('../gulp.config.json');
const { exec } = require('child_process');

// script to execute
function wgetSH() {
	return './wget.sh';
};

// shell helper
function shell(cb) {
	exec(wgetSH(), (error, stdout, stderr) => {
		if (error) {
			console.error(`exec error: ${error}`);
			return;
		}
		if (stderr) {
			console.error(`stderr: ${stderr}`);
		}
		console.log(`stdout: ${stdout}`);
	});
	cb();
}

exports.wgetSH = shell;