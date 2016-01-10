// ////////////////////////////////////////
// REQUIRED
// ////////////////////////////////////////

var gulp = require('gulp'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload,
  autoprefixer = require('gulp-autoprefixer'),
	compass = require('gulp-compass'),
  del = require('del'),
  jade = require('gulp-jade'),
	plumber = require('gulp-plumber'),
	rename = require('gulp-rename'),
  sass = require('gulp-sass'),
  uglify = require('gulp-uglify');

// ////////////////////////////////////////
// Scripts Task
// ////////////////////////////////////////
gulp.task('scripts', function() {
	gulp.src(['app/js/**/*.js', '!app/js/**/*.min.js'])
	.pipe(plumber())
	.pipe(rename({suffix:'.min'}))
	.pipe(uglify())
	.pipe(gulp.dest('app/js'))
	.pipe(reload({stream:true}));
});

// ////////////////////////////////////////
// Compass / Sass Texts
// ////////////////////////////////////////
gulp.task('compass', function() {
	gulp.src('app/scss/style.scss')
		.pipe(plumber())
		.pipe(compass({
			config_file: './config.rb',
			css: 'app/css',
			sass: 'app/scss',
			require: ['susy']
		}))
		.pipe(autoprefixer('last 2 versions'))
		.pipe(gulp.dest('app/css/'))
		.pipe(reload({stream:true}));
});

// ////////////////////////////////////////
// Jade Tasks
// ////////////////////////////////////////
//gulp.task('templates', function() {
//  // vars YOUR_LOCALS = ();

//	gulp.src('app/**/*.jade')
//    .pipe(jade({
//      locals: YOUR_LOCALS
//    }))
//    .pipe(gulp.dest('./dist/'))
//	  .pipe(reload({stream:true}));
//});

// ////////////////////////////////////////
// HTML Tasks
// ////////////////////////////////////////
gulp.task('html', function() {
	gulp.src('app/**/*.html')
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
	return gulp.src('app/**/*/')
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
			baseDir: "./app/"
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
	gulp.watch('app/js/**/*.js',['scripts']);
	gulp.watch('app/scss/**/*.scss',['compass']);
	gulp.watch('app/**/*.html',['html']);
});

// ////////////////////////////////////////
// Default Task
// ////////////////////////////////////////
gulp.task('default',['scripts', 'compass', 'html', 'browser-sync', 'watch']);
