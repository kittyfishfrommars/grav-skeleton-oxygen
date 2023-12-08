// import packages
// TODO: make basedir configurable
const config = require('../gulp.config.json');
const browsersync = require('browser-sync').create();

// assumes apache is running
function server(cb) {
	browsersync.init({
		server: false,
        port: 8080,
        open: 'local',
        proxy: {
            target: "http://localhost/",
            ws: true
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