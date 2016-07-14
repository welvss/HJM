var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    livereload = require('gulp-livereload');
gulp.task('default', function() {
  return gutil.log('Gulp is running!')
});

gulp task('watch', function() {
	var server = livereload();
	
	})