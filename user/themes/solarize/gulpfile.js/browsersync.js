// import packages
// TODO: make basedir configurable
const config = require('../gulp.config.json');
const browsersync = require('browser-sync').create();

// startup local server on port 3000
function server(cb) {
	browsersync.init({
        ui: {
            port: 3000
        },
		server: {
			baseDir: config.path.baseDir,
		},
		notify: {
			styles: {
				top: 'auto',
				bottom: '0',
			},
		},
	});
	cb();
}

exports.server = server;

// reload browsersync server
function reload(cb) {
	browsersync.reload();
	cb();
}

exports.reload = reload;