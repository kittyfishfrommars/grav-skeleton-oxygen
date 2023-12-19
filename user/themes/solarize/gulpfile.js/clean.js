// import packages
const config = require('../gulp.config.json');
const { src } = require('gulp');
const clean = require('gulp-clean');

// deletes files from /dist folder
// specifically use this glob pattern /*
// https://github.com/mwaylabs/generator-m-ionic/issues/456#issue-194416501
function cleanDist(cb) {
    return src(config.path.dist + '/*', {
             read: false
        })
       .pipe(clean())
       .on('end', function() {
            cb();
       });
}

exports.cleanDist = cleanDist;