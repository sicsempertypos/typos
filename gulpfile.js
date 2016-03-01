// ////////////////////////////////////////
// REQUIRED
// ////////////////////////////////////////

var gulp = require('gulp');
var compass = require('gulp-compass');
var es = require('event-stream');
var jade = require('gulp-jade');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

// ////////////////////////////////////////
// Scripts Task
// ////////////////////////////////////////
gulp.task('scripts',function () {
	return gulp.src('js/**/*.js')
		//.pipe(uglify('all.min.js'))
		.pipe(gulp.dest('/dist'));
});
// ////////////////////////////////////////
// Compass / Sass Texts
// ////////////////////////////////////////
gulp.task('compass', function() {
	gulp.src('sicsemper/stylesheets/app.sass')
		.pipe(plumber())
		.pipe(compass({
			config_file: './config.rb',
			css: 'sicsemper/assets/css',
			sass: 'sicsemper/sass',
			require: ['susy']
		}))
		.pipe(compas({
			config_file: './config.rb',
			css: 'sicsemper/assets/css',
			sass: 'sicsemper/assets/css/2-modules'
		}))
		.pipe(autoprefixer('last 2 versions'))
		.pipe(gulp.dest('sicsemper/assets/css/'))
		.pipe(reload({stream:true}));
});

// ////////////////////////////////////////
// Jade Tasks
// ////////////////////////////////////////
gulp.task('jade', function() {
	return gulp.src('index.jade')
    	.pipe(jade({pretty:true}))
    	.pipe(gulp.dest('build/development'));
	    //.pipe(reload({stream:true}));
});		

// ////////////////////////////////////////
// HTML Tasks
// ////////////////////////////////////////
gulp.task('html', function() {
	gulp.src('sicsemper/**/*.html')
	 	.pipe(reload({stream:true}));
});

// ////////////////////////////////////////
// Build Tasks
// ////////////////////////////////////////

// clear out all files and folders from build folder
gulp.task('build:cleanfolder', function(cb) {
	del([
		'build/**'
	], cb);
});

// task to create build directory for all files
gulp.task('build:copy', ['build:cleanfolder'], function() {
	return gulp.src('sicsemper/**/*/')
		.pipe(gulp.dest('build/'));
});

// task to remove unwanted build files
// list all files and directories here that you don't want to include
gulp.task('build:remove', ['build:copy'], function(cb) {
	del([
		'build/scss/',
		'build/js/!(*.min.js)'
	], cb);
});

gulp.task('build', ['build:copy', 'build:remove']);

// ////////////////////////////////////////
// Browser-Sync Tasks
// ////////////////////////////////////////
gulp.task('browser-sync', function() {
	browserSync({
		server: {
			baseDir: "./sicsemper/"
		}
	});
});

// task to run build server for testing final app
gulp.task('build:serve', function() {
	browserSync({
		server: {
			baseDir: "./build/"
		}
	});
});

// ////////////////////////////////////////
// Watch Tasks
// ////////////////////////////////////////
gulp.task('watch',function(){
	gulp.watch('sicsemper/js/**/*.js',['scripts']);
	gulp.watch('sicsemper/sass/**/*.sass',['compass']);
	gulp.watch('sicsemper/**/*.html',['html']);
});

// ////////////////////////////////////////
// Default Task
// ////////////////////////////////////////
gulp.task('default',['scripts', 'compass', 'html', 'browser-sync', 'watch']);
