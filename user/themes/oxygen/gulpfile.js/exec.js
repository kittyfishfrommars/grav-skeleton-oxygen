// const config = require('../gulp.config.json');
const { exec } = require('child_process');

// TODO: pass values from gulp.config.json via parameter
// invoke shell script to download a static copy
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