var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	rename = require('gulp-rename');

// Tasks
gulp.task('styles',function() {
	gulp.src('./scss/main.scss')
	    .pipe(sass())
	    .pipe(gulp.dest('./css'));
});

// Watch
gulp.watch('./scss/*scss',['styles']);

// Default
gulp.task('default', function() {
	// code for default task
});