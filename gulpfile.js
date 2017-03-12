//REQUIREMENTS

//Utilities
var gulp = require('gulp');
var gutil = require('gulp-util');
var plumber = require('gulp-plumber');

//Scripting
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

//Styling
var less = require('gulp-less');
var sourceMap = require('gulp-sourcemaps');
var lesswatch = require('gulp-watch-less');

var rename = require('gulp-rename');

//Dev Tools
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var es = require('event-stream');

//On Error
var onError = function (err) {
  gutil.beep();
  console.log(err.toString());
  this.emit('end');
};


//PATH VARS
var vendorPath = 'assets/vendor/';
var bootstrapPath = 'node_modules/bootstrap/';
var jqueryPath = 'node_modules/jquery/';



//TASKS
//--------------------------------------------------------------

// Static server
gulp.task('browser-sync', function() {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
});


//--------------------------------------------------------------
// LESS Main
//
// This task is for auto-created minified css files. Any less  
// files in the 'global' directory will automatically be minified
// and concatenated and have a 'theme.min.css' file created.
//--------------------------------------------------------------
gulp.task('less-main', function() {
  return gulp.src([
    bootstrapPath + '/less/bootstrap.less',

    //MAIN GLOBAL STYLESHEET
    'assets/less/global/theme.less'
  ])
    .pipe(plumber({
      errorHandler: onError
    }))
    .pipe(sourceMap.init())
    .pipe(less( {compress : true} ))
    .pipe(concat('theme.min.css'))
    .pipe(sourceMap.write('maps/'))
    .pipe(gulp.dest('assets/less/compiled/'))
    .pipe(browserSync.stream())
    .on('error', gutil.log);
});


//--------------------------------------------------------------
// LESS Inner
//
// This task is for auto-created minified css files. Any child 
// directory of 'less', that is NOT the 'global' directory, will 
// automatically have a 'filename.min.css' file created. 
//--------------------------------------------------------------
gulp.task('less-inner', function() {
  return gulp.src([
    //MAIN GLOBAL STYLESHEET
    'assets/less/**/*.less',
    '!assets/less/global/**/*'
  ])
    .pipe(plumber({
      errorHandler: onError
    }))
    .pipe(less( {compress : true} ))
    .pipe(rename(
      function(file) {
        file.extname = '.min' + file.extname;
      }
    ))
    .pipe(gulp.dest('assets/less/'))
    .pipe(browserSync.stream())
    .on('error', gutil.log);
});


//Compile and concat framework and custom scripts into one file
gulp.task('scripts', function() {
  return gulp.src([
    //ADD VENDOR JAVASCRIPT HERE

    jqueryPath + 'dist/jquery.min.js',
    bootstrapPath + '/js/bootstrap.js',
    'assets/js/global/*.js'
  ])
    .pipe(plumber({
      errorHandler: onError
    }))
    .pipe(concat('theme.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js/compiled/'))
    .pipe(browserSync.stream())
    .on('error', gutil.log);
});



//Watch Task
//Watches less and js directories for change.
gulp.task('watch', function() {
  gulp.watch('*.html', reload);
  gulp.watch('assets/less/global/**/*.less', ['less-main']);
  gulp.watch('assets/less/**/*.less', ['less-inner']);
  gulp.watch('assets/js/global/**/*.js', ['scripts']);
  gulp.watch('assets/js/*.js', ['scripts']);
});

//Build Task
gulp.task('build', ['less-main', 'less-inner', 'scripts']);

//Start work with project using the default "gulp" command
gulp.task('default', ['less-main', 'less-inner', 'scripts', 'browser-sync', 'watch']);




